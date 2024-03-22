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
    Route::post('/', [AuthController::class, 'authenticate'])->middleware('throttle:5,2'); // pour les buit de force (num1 = nb de tentatives, num2 = Temps avants de re pouvoir tenter)
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

        Route::get('delete/{annonce}', 'delete')->name('delete');

    });     

    Route::prefix('contact')->name('contact.')->controller(ContactController::class)->group(function(){
        Route::view('/admin', 'admin.contact')->name('index');

        Route::get('show/{contact}', 'show')->name('show');
        Route::get('/delete/{contact}', 'delete')->name('delete');    
    });
    
    Route::view('/stats', 'admin.stats')->name('stats');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::view('/mentions', 'client.mention')->name('mention');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'validateContact'])->name('valideContact')->middleware('throttle:5,2');
Route::get('voiture', [VoitureController::class, 'index'])->name('voiture'); 
