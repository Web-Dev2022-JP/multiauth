<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/driver',function(){
    return view('driver');
})->name('driver')->middleware('driver');

Route::get('/admin',function(){
    return view('admin');
})->name('admin')->middleware('admin');

Route::get('/client',function(){
    return view('client');
})->name('client')->middleware('client');





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
