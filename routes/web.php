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
    if (Auth::check()) {
        return View::make('pages.admin');
    }else{
        return View::make('auth.login');
    }
});
Route::group(['middleware' => ['auth']], function() {

//    Dashboards

    Route::get('tasks', 'TaskController@viewTasks');
//    Tasks


});
Route::get('logout', 'LoginController@logout');

Auth::routes();

Route::get('pages.admin', 'LoginController@index')->name('home');

