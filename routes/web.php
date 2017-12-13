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
Route::get('/', function()
{
    return View::make('auth.login');
});

//
//Route::get('/admin', function()
//{
//    return View::make('pages.home');
//});



Auth::routes();

Route::get('pages.admin', 'LoginController@index')->name('home');
