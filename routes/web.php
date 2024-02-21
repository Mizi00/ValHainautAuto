<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ContactController;
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

    Route::prefix('annonce')->name('annonce.')->controller(AnnonceController::class)->group(function() {
        Route::get('/admin', 'index')->name('index');
        Route::get('/show/{annonce}', 'show' )->name('show');
        Route::get('/edit/{annonce}', 'edit')->name('edit');
        Route::patch('/update/{annonce}', 'update')->name('update');
        Route::get('/add', 'add')->name('add');
        Route::patch('/validate_add', 'validateAdd')->name('validateAdd');
    });     
    
    Route::view('admin_message', 'admin.message')->name('messageAdmin');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'validateContact']);
Route::get('voiture', [VoitureController::class, 'index'])->name('voiture'); 
