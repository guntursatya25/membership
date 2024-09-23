<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Mail\RegistrasiMail;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

// Setelah pengguna terdaftar berhasil

class AuthController extends Controller
{
    public function register(){
        return view('member.auth.register');
    }
    public function index(){
        return view('member.auth.login');
    }
    public function forgetin(){
        return view('member.auth.forgetpass');
    }
    public function gantipass(){
        return view('member.auth.gantipassword');
    }
    public function sendResetLinkEmail(Request $request){
        $request->validate(['email' => 'required|email']);
        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }
    
    public function actiongantipassword(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
        
    }

    public function actionLogin(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ],
        [
            'username.required' => 'Username kosong',
            'password.required' => 'Password kosong'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->flashExcept('password');

            return redirect(route('member'));
        } else {
            // return back();
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    public function actionRegister(Request $request){
        $validatedData = $request->validate([
            'name' => 'max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required',
        ]);
        
        $passgasi=$validatedData['password'];
        $validatedDatap = Hash::make($validatedData['password']);
 
        $userp = new User;
        
        $userp->name = $request->name;
        $userp->username = $request->username;
        $userp->email = $request->email;
        $userp->refferal = $request->referral_code;
        
        $userp->password = $validatedDatap;
        $userp->role = "user";

        $userp->save();
        Mail::to($userp->email)->send(new RegistrasiMail($userp));

        // User::create($validatedData);
        return redirect(route('login'))->with('success', 'Registration Succesfull! Please Login');

    }

    public function logout()
    {
        Auth::logout();
        Request()->session()->invalidate();
        Request()->session()->regenerateToken();
        return redirect('/');
    }
}
