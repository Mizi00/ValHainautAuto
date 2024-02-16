<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoitureController;

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

Route::view('/', 'index')->name('home');

Route::prefix('/login')->middleware('guest')->group(function(){
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'authenticate']);
});

Route::middleware('auth')->group(function(){
    Route::view('admin', 'admin.index')->name('homeAdmin');
});

Route::view('contact', 'client.contact')->name('contact');
Route::get('voiture', [VoitureController::class, 'index'])->name('voiture');
