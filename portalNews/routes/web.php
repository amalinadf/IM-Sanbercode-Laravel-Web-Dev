<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

// Route::get('/', function () {
//     return view('welcome');
// });

// HOME
Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [FormController::class, 'register']);
Route::post('/welcomee', [FormController::class, 'welcomee']);






// REGISTER
// Route::get('/register', function () {
//     return view('register');
// });

//WELCOME
// Route::get('/welcome', function () {
//     return view('welcome');
// });