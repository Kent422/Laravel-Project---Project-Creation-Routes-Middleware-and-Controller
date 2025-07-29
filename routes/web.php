<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Middleware\CheckAge; // ✅ Import your middleware class
use App\Http\Controllers\PetController;

// 🌐 Default homepage route
Route::get('/', function () {
    return view('welcome');
});

// 📄 Plain text route
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// 🎯 Controller route
Route::get('/my', [MyController::class, 'index']);

// 🛡️ Restricted route with CheckAge middleware applied
Route::get('/restricted', [MyController::class, 'restrictedPage'])
    ->middleware(CheckAge::class);



Route::resource('pets', PetController::class);