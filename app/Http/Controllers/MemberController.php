<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    public function myproduct()
    {
        return view('member.myproducts');
    }
    public function produtcs()
    {
        return view('member.product');
    }
    public function affiliate($id)
    {
        $usernya = User::find($id);
        $usernamenya = $usernya->username;
        $useraff = User::where('refferal', $usernamenya)->get();
        return view('member.afiliate', compact('useraff', 'usernya'));
    }
    public function kelolamember()
    {
        $user = User::all();
        return view('member.admin.kelolamember', compact('user'));
    }

    public function update(Request $request)
    {
        // $request->validate([
        //     'namanya' => 'required|string',
        //     'email' => 'required|email',
        //     'hasproduct' => 'required|string',
        // ]);

        $user = User::find($request->id);

        // if (!$user) {
        //     return redirect()->back()->with('error', 'Pengguna tidak ditemukan.');
        // }
        $user->type_user = $request->type_user;
        $user->valid_time = $request->valid_time;
        $user->name = $request->namanya;
        $user->email = $request->email;
        $user->hasproduct = $request->hasproduct;

        $user->save();

        return redirect()->back()->with('success', 'Data pengguna berhasil diperbarui.');
    }
}
