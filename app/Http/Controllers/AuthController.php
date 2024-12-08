<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\exhib1;
use App\Models\exhib2;
use App\Models\exhib3;
use App\Models\store1;
use App\Models\store2;
use App\Models\store3;
use App\Models\store4;
use App\Models\store5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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

    function account(){
        $user = user::all();
        return view('account', ['users' => $user]);
    }

    public function edit(User $user){
        return view('editprofile', ['user' => $user]);
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

    public function buyticket2Post(Request $request){
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

         $newTicket = exhib2::create($data);

         return redirect()->route('invoice.2', $newTicket->id)->with('success', 'Ticket purchased successfully!');
     }

     public function invoice2($id)
     {
     $ticket = Exhib2::findOrFail($id);
     return view('invoice2', compact('ticket'));
     }

    public function buyticket3(){
        return view('buyticket3');
    }

    public function buyticket3Post(Request $request){
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

        $newTicket = exhib3::create($data);

        return redirect()->route('invoice.3', $newTicket->id)->with('success', 'Ticket purchased successfully!');
    }

    public function invoice3($id)
    {
    $ticket = Exhib2::findOrFail($id);
    return view('invoice3', compact('ticket'));
    }

    public function form(){
        return view('form');
    }

    public function formPost(Request $request){
       $data =  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|string',
            'address' => 'required|string',
            'quantity' => 'required|integer',
            'totalPrice' => 'required|integer',
            'paymentMethod' => 'required|string',
        ]);

        $newTicket = store1::create($data);

        return redirect()->route('invoice.4', $newTicket->id)->with('success', 'Merchandise purchased successfully!');
    }

    public function invoice4($id)
    {
    $merchandise = Store1::findOrFail($id);
    return view('invoice4', compact('merchandise'));
    }

    public function form2(){
        return view('form2');
    }

    public function form2Post(Request $request){
       $data =  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|string',
            'address' => 'required|string',
            'quantity' => 'required|integer',
            'totalPrice' => 'required|integer',
            'paymentMethod' => 'required|string',
        ]);

        $newTicket = store2::create($data);

        return redirect()->route('invoice.5', $newTicket->id)->with('success', 'Merchandise purchased successfully!');
    }

    public function invoice5($id)
    {
    $merchandise = Store2::findOrFail($id);
    return view('invoice5', compact('merchandise'));
    }

    public function form3(){
        return view('form3');
    }

    public function form3Post(Request $request){
       $data =  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|string',
            'address' => 'required|string',
            'quantity' => 'required|integer',
            'totalPrice' => 'required|integer',
            'paymentMethod' => 'required|string',
        ]);

        $newTicket = store3::create($data);

        return redirect()->route('invoice.6', $newTicket->id)->with('success', 'Merchandise purchased successfully!');
    }

    public function invoice6($id)
    {
    $merchandise = Store3::findOrFail($id);
    return view('invoice6', compact('merchandise'));
    }

    public function form4(){
        return view('form4');
    }

    public function form4Post(Request $request){
       $data =  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|string',
            'address' => 'required|string',
            'quantity' => 'required|integer',
            'totalPrice' => 'required|integer',
            'paymentMethod' => 'required|string',
        ]);

        $newTicket = store4::create($data);

        return redirect()->route('invoice.7', $newTicket->id)->with('success', 'Merchandise purchased successfully!');
    }

    public function invoice7($id)
    {
    $merchandise = Store4::findOrFail($id);
    return view('invoice7', compact('merchandise'));
    }

    public function form5(){
        return view('form5');
    }

    public function form5Post(Request $request){
       $data =  $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required|string',
            'address' => 'required|string',
            'quantity' => 'required|integer',
            'totalPrice' => 'required|integer',
            'paymentMethod' => 'required|string',
        ]);

        $newTicket = store5::create($data);

        return redirect()->route('invoice.8', $newTicket->id)->with('success', 'Merchandise purchased successfully!');
    }

    public function invoice8($id)
    {
    $merchandise = Store5::findOrFail($id);
    return view('invoice8', compact('merchandise'));
    }


    public function updateProfile(User $user, Request $request)
    {
    $data = $request->validate([
        'input_picture' => 'image',
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id,
    ]);

    if ($request->hasFile('input_picture')) {
        // Hapus gambar profil lama jika ada
        if ($user->profile_picture) {
            Storage::disk('public')->delete($user->profile_picture);
        }

        // Simpan gambar baru
        $path = $request->file('input_picture')->store('profile_pictures', 'public');
        $data['profile_picture'] = $path;
    }

    $user->update($data);

    return redirect(route('account'))->with('success', 'Profile updated successfully.');
    }

    public function updatePassword(User $user, Request $request)
    {
    $data = $request->validate([
        'password' => 'required',
        'new_password' => 'required|confirmed',
    ]);


    if (!Hash::check($data['password'], $user->password)) {
        return back()->withErrors(['password' => 'The current password is incorrect.']);
    }

    $user->update([
        'password' => bcrypt($data['new_password']),
    ]);

    return redirect(route('account'))->with('success', 'Password updated successfully.');
    }

}
