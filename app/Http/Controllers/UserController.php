<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    //
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function create(Request $req){
        $validate = $this->validate($req, [
            // 'nisn' => 'required',
            'name' => 'required',
            // 'talus' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $validate['password'] = bcrypt($req->password);

        User::create($validate);
        
        return redirect('login');

    }

    // function auth(Request $req){
    //     $credentials = $req->validate([
    //         'email' => ['required','email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $req->session()->regenerate();

    //         return redirect()->intended('admin');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Email Salah',
    //     ])->onlyInput('email');
    // }

    function auth(Request $req){

        $credentials = $req->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)){
            $req->session()->regenerate();
            return redirect()->intended('admin');
        }
        return back()->withErrors([
            'email' => 'Email Salah',
        ])->onlyInput('email');
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
