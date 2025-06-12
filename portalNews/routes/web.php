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


use Illuminate\Support\Facades\DB;


Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        if (Schema::hasTable('users')) {
            return '✅ Berhasil connect ke database dan tabel users ditemukan!';
        } else {
            return '✅ Berhasil connect ke database, tapi tabel users tidak ditemukan!';
        }
    } catch (\Exception $e) {
        return '❌ Gagal connect ke database: ' . $e->getMessage();
    }
});









// REGISTER
// Route::get('/register', function () {
//     return view('register');
// });

//WELCOME
// Route::get('/welcome', function () {
//     return view('welcome');
// });
