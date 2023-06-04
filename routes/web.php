<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routers that helps to route from one page to another in the system

Route::get('/', function () {
    return view('front-end/index');
})->name('index');
Route::get('/menu', function () {
    return view('pages.menu');
})->name('home.menu');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/service', function () {
    return view('pages.services');
})->name('services');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


// Admin dashboard routers

Route::get('/admin', function () {
    return view('dashboard.index');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
