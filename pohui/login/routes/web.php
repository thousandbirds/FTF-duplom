<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('mainpage');
});

Route::get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactform', function () {
    return view('contactform');
})->name('contact-form');

Route::post('/contactform/aplly', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact-form-aplly');


Route::post('/signup', [App\Http\Controllers\ContactController::class, 'sub'])->name('sign-up');

Route::get('/signup', function () {
    return view('signup');
});


Route::post('/signin', [App\Http\Controllers\ContactController::class, 'subin'])->name('sign-in');

Route::get('/signin', function () {
    return view('signin');
});



