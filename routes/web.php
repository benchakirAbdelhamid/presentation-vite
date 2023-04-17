<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;




// =============================================
Route::get('/', function () {
    return view('Home');
});


Route::view('add', 'addCustomer');
// addCustomer ===> page laravel



// Route::get('/', [HomeController::class, 'HomeIndex']);
// Route::post('dataInsert', [HomeController::class, 'DataInsert']);
// // =============================================


// Route::post('users', [UserController::class, 'getData']);
// Route::view('login', 'login'); // URL/login

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
