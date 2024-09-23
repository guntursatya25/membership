<?php

namespace App\Http\Controllers;

use App\Models\DaftarDomain;
use App\Models\User;
use Illuminate\Http\Request;

class DaftarDomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $usernya = User::find($id);
        return view('member.domain', compact('usernya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
        'domainnya' => 'required|unique:daftardomain,domain',
    ],
    [
        'domainnya.required' => 'Domain wajib di isi',
        'domainnya.unique' => 'Domain sudah ada',
    ]
    );
        $usernya = User::find($request->idnya);
        $maxdomain = $usernya->max_domain;
        $existingItemCount = $usernya->DaftarDomain->count();

        if ($existingItemCount >= $maxdomain) {
            return redirect()->back()->with('error', "Anda telah mencapai batasan maksimum ($maxdomain) item domain.");
        }
        $userdomainya = new DaftarDomain;
        $userdomainya->user()->associate($usernya);
        $userdomainya->domain = $request->domainnya;
        $userdomainya->product = $request->hasproductnya;
        $userdomainya->save();
        return redirect()->route('daftardomain', $request->idnya);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DaftarDomain  $daftarDomain
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarDomain $daftarDomain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarDomain  $daftarDomain
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarDomain $daftarDomain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarDomain  $daftarDomain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarDomain $daftarDomain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarDomain  $daftarDomain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DaftarDomain::find($request->iddeleted)->delete();
        return back()->with('sukses','Domain berhasil dihapus');
    }
}
