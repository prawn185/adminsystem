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

Route::get('logout', 'LoginController@logout');

Auth::routes();

Route::get('pages.admin', 'LoginController@index')->name('home');




Route::group(['middleware' => ['auth']], function () {

//    Dashboards


//    Tasks
    Route::get('tasks', 'TaskController@viewTaskList');
    Route::get('tasks/view/{id}', 'TaskController@viewSingleTask');

//    Create Task
    Route::get('tasks/create', 'TaskController@createTaskView');
    Route::post('tasks/create', 'TaskController@createTaskPost');

//    Edit Task
    Route::get('tasks/edit/{id}', 'TaskController@editSingleTask');
    Route::post('tasks/edit/{id}', 'TaskController@editTask');

//    Complete Task
    Route::get('tasks/complete/{id}', 'TaskController@completeTask');
    Route::get('tasks/completed', 'TaskController@viewCompletedTasks');

//    Add Note
    Route::post('tasks/addnote/{id}', 'TaskController@addNote');

//    Profile

//    My Profle
    Route::get('myprofile', 'ProfileController@viewMyProfile');

//    Get all profiles
    Route::get('profiles', 'ProfileController@viewAllProfiles');


//    Any Profile
    Route::get('profile/create', 'ProfileController@createProfile')->name('createProfile');
    Route::get('profile/{id}', 'ProfileController@viewProfile');

    Route::get('profile/edit/{id}', 'ProfileController@viewEditProfile');



    Route::post('profile/edit/{id?}', 'ProfileController@editProfile');

    Route::post('profile/create', 'ProfileController@editProfile');


});





Route::get('logout', 'LoginController@logout');

Auth::routes();

Route::get('pages.admin', 'LoginController@index')->name('home');

