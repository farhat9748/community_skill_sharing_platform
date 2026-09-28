<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home.page');


/*
|--------------------------------------------------------------------------
| Main Pages
|--------------------------------------------------------------------------
*/

Route::get('/connect', function () {
    return view('connect');
})->name('connect');

Route::get('/share', function () {
    return view('share');
})->name('share');

Route::get('/need', function () {
    return view('need');
})->name('need');

Route::get('/skill', function () {
    return view('skill');
})->name('skill');


/*
|--------------------------------------------------------------------------
| Connect & Share
|--------------------------------------------------------------------------
*/

Route::get('/connect-share', function () {
    return view('connect-share');
})->name('connect.share');


/*
|--------------------------------------------------------------------------
| Get Started
|--------------------------------------------------------------------------
*/

Route::get('/get-started', function () {
    return view('get-started');
})->name('get.started');


/*
|--------------------------------------------------------------------------
| Other Pages
|--------------------------------------------------------------------------
*/

Route::get('/learn-more', function () {
    return view('learn-more');
})->name('learn.more');

Route::get('/about-us', function () {
    return view('about us');
})->name('about');

Route::get('/help', function () {
    return view('how-to-help');
})->name('help');

Route::get('/offer-your-skill', function () {
    return view('offer-your-skill');
})->name('offer.skill');

Route::get('/find-what-you-need', function () {
    return view('find-what-you-need');
})->name('find.skill');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/*
|--------------------------------------------------------------------------
| Contact Form
|--------------------------------------------------------------------------
*/

Route::post('/contact', function (Request $request) {

    $request->validate([
        'name' => 'required|string|max:100',
        'address' => 'required|string|max:500',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:150',
        'subject' => 'required|string|max:200',
        'message' => 'required|string|max:1000',
    ]);

    return back()->with(
        'success',
        'Thank you! Your message has been submitted successfully.'
    );

})->name('contact.submit');


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/login', function (Request $request) {

    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    return redirect()->route('dashboard')
        ->with('success', 'Login successful!');

});


/*
|--------------------------------------------------------------------------
| Register
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register', function (Request $request) {

    $request->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    return redirect()->route('login')
        ->with('success', 'Registration successful! Please login.');

});


/*
|--------------------------------------------------------------------------
| Find Connections
|--------------------------------------------------------------------------
*/

Route::get('/find', function () {
    return view('find');
})->name('find.index');


/*
|--------------------------------------------------------------------------
| Reviews
|--------------------------------------------------------------------------
*/

Route::post('/reviews', function (Request $request) {

    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'comment' => 'required|string|max:1000',
    ]);

    return back()->with(
        'success',
        'Thank you! Your review has been submitted successfully.'
    );

})->name('reviews.store');


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');