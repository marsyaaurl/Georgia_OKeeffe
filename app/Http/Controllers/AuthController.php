<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }

    function artwork(){
        return view('artwork');
    }


    function loginpost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('account'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
           return redirect(route('register'))->with("error", "Registration failed, try again.");
        }
        return redirect(route('login'))->with("success", "Register Succesful");
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

}
