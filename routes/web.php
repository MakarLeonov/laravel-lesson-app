<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

// Route::get('/', 'MainController@index');
// 
Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/search', [MainController::class, 'search'])->name('search');

Route::get('/layout', function () {
    return view('layout');
});

