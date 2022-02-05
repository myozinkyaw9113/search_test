<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'frontIndex']);
Route::get('/searchBook', [App\Http\Controllers\HomeController::class, 'searchBook'])->name('frontend.searchBook');
Route::post('/searchByDate', [App\Http\Controllers\HomeController::class, 'searchByDate']);
Route::get('/view-item/{id}', [App\Http\Controllers\HomeController::class, 'viewItem']);
