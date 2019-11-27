<?php

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
    return view('landing');
})->name('general.land');

Route::get('/auth', function(){
    return view('auth');
})->name('general.auth');

Route::get('/dashboard', function(){
    return view('app');
})->name('dashboard');

