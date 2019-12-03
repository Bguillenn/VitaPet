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

//Agregue para idioma
Route::get('locale/{locale}',function($locale){
    Session::put('locale',$locale);
    return redirect()->back();
});
//Agregue ruta reports 
Route::get('/reports', function(){
    return view('reports.index');
})->name('reports.index');

//Socialite facebook
Route::get('login/facebook', 'Auth\FacebookController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

Route::get('login/google', 'Auth\GoogleController@redirectToProvider');
Route::get('login/google/callback', 'Auth\GoogleController@handleProviderCallback');

Route::get('login/twitter', 'Auth\TwitterController@redirectToProvider');
Route::get('login/twitter/callback', 'Auth\TwitterController@handleProviderCallback');


