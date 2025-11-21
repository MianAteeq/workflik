<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('home.register');

Route::get('/services', function () {
    return view('service');
})->name('home.services');

Route::get('/pricing', function () {
    return view('pricing');
})->name('home.pricing');

Route::get('/contact/us', function () {
    return view('contact');
})->name('home.contact');

Route::get('/about/us', function () {
    return view('about');
})->name('home.about');

Route::get('/accounting', function () {
    return view('accounting');
})->name('home.accounting');

Route::get('/hr', function () {
    return view('hr');
})->name('home.hr');

Route::get('/pos', function () {
    return view('pos');
})->name('home.pos');
