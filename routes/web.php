<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function(){
    return view('home');
})->name('home');


Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/registration',[AuthController::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/account-nonlogin', function(){
    return view('account-nonlogin');
});

Route::get('/account', function(){
    return view('account');
})->name('account');

Route::get('/artwork', function(){
    return view('artwork');
})->name('artwork');

Route::get('/artworkslct', function(){
    return view('artworkslct');
})->name('artworkslct');

Route::get('/newyork', function(){
    return view('newyork');
})->name('newyork');

Route::get('/jimson', function(){
    return view('jimson');
})->name('jimson');

Route::get('/oriental', function(){
    return view('oriental');
})->name('oriental');

Route::get('/black', function(){
    return view('black');
})->name('black');

Route::get('/ladder', function(){
    return view('ladder');
})->name('ladder');

Route::get('/cow', function(){
    return view('cow');
})->name('cow');

Route::get('/blue', function(){
    return view('blue');
})->name('blue');



Route::get('/bio', function(){
    return view('bio');
})->name('bio');

Route::get('/buyticket', function(){
    return view('buyticket');
})->name('buyticket');

Route::get('/buyticket2', function(){
    return view('buyticket2');
})->name('buyticket2');

Route::get('/buyticket3', function(){
    return view('buyticket3');
})->name('buyticket3');

Route::get('/exhib', function(){
    return view('exhib');
})->name('exhib');

Route::get('/form', function(){
    return view('form');
})->name('form');

Route::get('/form2', function(){
    return view('form2');
})->name('form2');

Route::get('/form3', function(){
    return view('form3');
})->name('form3');

Route::get('/form4', function(){
    return view('form4');
})->name('form4');

Route::get('/invoice', function(){
    return view('invoice');
})->name('invoice');

Route::get('/invoice2', function(){
    return view('invoice2');
})->name('invoice2');

Route::get('/invoice3', function(){
    return view('invoice3');
})->name('invoice3');

Route::get('/membership', function(){
    return view('membership');
})->name('membership');

Route::get('/formmembership', function(){
    return view('formmembership');
})->name('formmembership');

Route::get('/paymentMethod', function(){
    return view('paymentMethod');
})->name('paymentMethod');

Route::get('/paymentMethod2', function(){
    return view('paymentMethod2');
})->name('paymentMethod2');

Route::get('/paymentMethod3', function(){
    return view('paymentMethod3');
})->name('paymentMethod3');

Route::get('/paymentStatus', function(){
    return view('paymentStatus');
})->name('paymentStatus');

Route::get('/paymentStatus2', function(){
    return view('paymentStatus2');
})->name('paymentStatus2');

Route::get('/paymentStatus3', function(){
    return view('paymentStatus3');
})->name('paymentStatus3');

Route::get('/store', function(){
    return view('store');
})->name('store');

Route::get('/editprofile', function(){
    return view('editprofile');
})->name('editprofile');

Route::get('/community', function(){
    return view('community');
})->name('community');

Route::get('/community', function(){
    return view('community');
})->name('community');

Route::get('/detailpost2', function(){
    return view('detailpost2');
})->name('detailpost2');

Route::get('/detailpost3', function(){
    return view('detailpost3');
})->name('detailpost3');