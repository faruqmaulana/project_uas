<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function passwordLogin(Request $request){
        $email = $request->cookie('email');
        return view('password', ['email' => $email]);
    }

    public function checkEmail(Request $request)
    {

        $email = $request->email;
        $user = User::where('email', '=', $email)->first();
        
        if ($user) return redirect('/login-password')->cookie('email', $email, 131400);
        return back()->with('loginError', 'Anda akan dialihkan ke halaman registrasi...');
    }

    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = User::where('email', '=', $request->email )->first();
            $data = [
                'name' => $user->name,
                'username' => $user->username,
                'email' => $user->email
            ];
            $array_json = json_encode($user);
            return redirect()->intended('/my-profile')->cookie('data', $array_json);
        }
 
        return back()->with('LoginError', 'Login Gagal!');
    }
}
