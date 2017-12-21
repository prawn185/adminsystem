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
    if (Auth::check()) {
        return View::make('pages.admin');
    } else {
        return View::make('auth.login');
    }
});
Route::group(['middleware' => ['auth']], function () {

//    Dashboards


//    Tasks
    Route::get('tasks', 'TaskController@viewTaskList');
    Route::get('tasks/view/{id}', 'TaskController@viewSingleTask');

    //    Edit Task
    Route::get('tasks/create', 'TaskController@createTaskView');
    Route::post('tasks/create', 'TaskController@createTaskPost');

//    Edit Task
    Route::get('tasks/edit/{id}', 'TaskController@editSingleTask');
    Route::post('tasks/edit/{id}', 'TaskController@editTask');

//    Complete Task
    Route::get('tasks/complete/{id}', 'TaskController@completeTask');
    Route::get('tasks/completed', 'TaskController@viewCompletedTasks');


});
Route::get('logout', 'LoginController@logout');

Auth::routes();

Route::get('pages.admin', 'LoginController@index')->name('home');

