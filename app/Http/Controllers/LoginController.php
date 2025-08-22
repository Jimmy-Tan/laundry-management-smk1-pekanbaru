<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('Login.Login-aplikasi');
    }


    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            if(Auth::user()->level === 'admin'){
                return redirect('/home');
            } else {
                return redirect('/Customer');
            }
        }    
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect ('/login');
    }

    public function registrasi(){
        return view('Login.registrasi');
    }

    public function simpanregistrasi(Request $request){
        // dd($request->all());
       
        User::create([  
            'name' => $request->name,
            'level' => 'pelanggan',
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
      

        
        return view('login.login-aplikasi');

    }
}