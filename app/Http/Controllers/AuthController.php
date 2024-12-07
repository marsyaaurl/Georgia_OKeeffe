<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\exhib1;
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



    public function buyticket(){
        return view('buyticket');
    }

    public function buyticketPost(Request $request){
       $data =  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'selectDate' => 'required|date',
            'selectTime' => 'required|string',
            'category' => 'required|string|max:255',
            'paymentMethod' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'totalPrice' => 'required|integer|min:0',
        ]);

        $newTicket = exhib1::create($data);

        return redirect()->route('invoice.1', $newTicket->id)->with('success', 'Ticket purchased successfully!');
    }

    public function invoice1($id)
    {
    $ticket = Exhib1::findOrFail($id);
    return view('invoice', compact('ticket'));
    }
}
