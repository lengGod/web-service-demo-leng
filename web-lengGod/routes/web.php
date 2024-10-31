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

//menu home
Route::get('/', function () {
    return view('welcome');
});

//menu about
Route::get('/about', function () { 
    return view('about'); 
}); 

//menu portfolio
Route::get('/portfolio', function () { 
    return view('portfolio'); 
    });

Route::get('/contact', function () { 
    return view('contact'); 
    });
Route::get('/login', function () { 
    return view('login'); 
    });
Route::get('/register', function () { 
    return view('register'); 
    });
Route::get('/dashboard', function () { 
    return view('dashboard'); 
    });
Route::get('/profile', function () { 
    return view('profile'); 
    });