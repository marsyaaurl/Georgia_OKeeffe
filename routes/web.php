<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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


Route::get('/account', [AuthController::class, 'account'])->name('account');

Route::get('/user/{user}/edit', [AuthController::class, 'edit'])->name('edit.user');
Route::put('/user/{user}/update', [AuthController::class, 'updateProfile'])->name('update.user');
Route::put('/user/{user}/updatepassword', [AuthController::class, 'updatePassword'])->name('update.password');

Route::get('/buyticket', [AuthController::class, 'buyticket'])->name('buyticket');
Route::post('/buyticket', [AuthController::class, 'buyticketPost'])->name('buyticket.post');
Route::get('/invoice1/{id}', [AuthController::class, 'invoice1'])->name('invoice.1');

Route::get('/buyticket2', [AuthController::class, 'buyticket2'])->name('buyticket2');
Route::post('/buyticket2', [AuthController::class, 'buyticket2Post'])->name('buyticket2.post');
Route::get('/invoice2/{id}', [AuthController::class, 'invoice2'])->name('invoice.2');

Route::get('/buyticket3', [AuthController::class, 'buyticket3'])->name('buyticket3');
Route::post('/buyticket3', [AuthController::class, 'buyticket3Post'])->name('buyticket3.post');
Route::get('/invoice3/{id}', [AuthController::class, 'invoice3'])->name('invoice.3');

Route::get('/form', [AuthController::class, 'form'])->name('form');
Route::post('/form', [AuthController::class, 'formPost'])->name('form.post');
Route::get('/invoice4/{id}', [AuthController::class, 'invoice4'])->name('invoice.4');

Route::get('/form2', [AuthController::class, 'form2'])->name('form2');
Route::post('/form2', [AuthController::class, 'form2Post'])->name('form2.post');
Route::get('/invoice5/{id}', [AuthController::class, 'invoice5'])->name('invoice.5');

Route::get('/form3', [AuthController::class, 'form3'])->name('form3');
Route::post('/form3', [AuthController::class, 'form3Post'])->name('form3.post');
Route::get('/invoice6/{id}', [AuthController::class, 'invoice6'])->name('invoice.6');

Route::get('/form4', [AuthController::class, 'form4'])->name('form4');
Route::post('/form4', [AuthController::class, 'form4Post'])->name('form4.post');
Route::get('/invoice7/{id}', [AuthController::class, 'invoice7'])->name('invoice.7');

Route::get('/form5', [AuthController::class, 'form5'])->name('form5');
Route::post('/form5', [AuthController::class, 'form5Post'])->name('form5.post');
Route::get('/invoice8/{id}', [AuthController::class, 'invoice8'])->name('invoice.8');



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
