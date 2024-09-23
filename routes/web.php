<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarDomainController;
use App\Http\Controllers\MemberController;
use App\Models\DaftarDomain;

Route::controller(AuthController::class)->group(function (){
    Route::get('/auth/login','index')->middleware('guest')->name('login');
    Route::get('/auth/register','register')->name('register');
    Route::get('/logout','logout')->middleware('auth')->name('logout');
    Route::get('/forgotpassword','forgetin')->middleware('guest')->name('forgetpass');

    Route::get('/changepasswrod','gantipass')->middleware('guest')->name('gantipass');

    Route::post('/forgotpassword', 'sendResetLinkEmail')->middleware('guest')->name('password.email');

    
    Route::post('/auth/login','actionLogin')->middleware('guest')->name('actionLogin');
    Route::post('/auth/register','actionRegister')->name('actionRegister');
    Route::post('/reset-password','actiongantipassword')->name('actionudaptepassword');
});
// Route::post('/reset-password',  function (Request request) {
//     // return 'berhasil kirim';
//     // return view('member.auth.gantipassword', ['token' => $token]);
// })->middleware('guest')->name('actionudaptepassword');
Route::view('password/reset/sent', 'member.auth.gantipassword')->name('password.sent');
Route::get('/reset-password/{token}', function (string $token) {
    // return 'berhasil kirim';
    return view('member.auth.gantipassword', ['token' => $token]);
})->middleware('guest')->name('password.reset');



// Route::get('/', function () {
//     return view('index2');
// });
// Route::get('/check', function () {
//     return view('checkout.checkout');
// });

Route::prefix('/')->middleware('auth')->controller(MemberController::class)->group(function () {
    Route::get('/', function () {
        return view('member.index');
    })->name('member');
    Route::get('myproduct','myproduct')->name('myproduct');
    Route::get('produtcs','produtcs')->name('produtcs');
    Route::get('managemember','kelolamember')->middleware('admin')->name('kelolamember');
    Route::post('managemember','update')->middleware('admin')->name('updatemem');
    Route::get('affiliate/{id}','affiliate')->name('affiliate');
});
Route::prefix('/')->middleware('auth')->controller(DaftarDomainController::class)->group(function () {
    Route::get('daftardomain/{id}','index')->name('daftardomain');    
    Route::post('daftardomain','store')->name('savedaftardomain');    
    Route::post('daftardomaine','destroy')->name('deletedaftardomain');    

});

// Route::get('/api/pluginsb', function () {
//     $domains = DaftarDomain::where('product', 'satriaberita')
//     ->orWhere('product', 'animdanber')
//     ->pluck('domain')
//     ->toArray();
    
//     return response()->json([
//         'allowed_domains' => $domains
//     ]);
// });