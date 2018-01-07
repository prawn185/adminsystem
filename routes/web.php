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
//Route::get('/', function(){dd('ads');});

Route::get('/', 'LoginController@index')->name('home');

Route::get('logout', 'LoginController@logout');

Auth::routes();

//Route::get('pages.admin', 'LoginController@index')->name('home');




Route::group(['middleware' => ['auth']], function () {

//    Dashboards


//    Tasks
    Route::get('tasks', 'TaskController@viewTaskList');
    Route::get('tasks/create', 'TaskController@createTaskView');
    Route::post('tasks/create', 'TaskController@createTaskPost');
    Route::get('tasks/completed', 'TaskController@viewCompletedTasks');
    Route::get('tasks/completed', 'TaskController@viewCompletedTasks');
    Route::get('tasks/{id}', 'TaskController@viewAnotherTaskList');
    Route::get('tasks/view/{id}', 'TaskController@viewSingleTask');

//    Create Task



//    Edit Task
    Route::get('tasks/edit/{id}', 'TaskController@editSingleTask');
    Route::post('tasks/edit/{id}', 'TaskController@editTask');

//    Complete Task
    Route::get('tasks/complete/{id}', 'TaskController@completeTask');


//    Add Note
    Route::post('tasks/addnote/{id}', 'TaskController@addNote');

//    Profile

//    My Profle
    Route::get('myprofile', 'ProfileController@viewMyProfile');

//    Get all profiles
    Route::get('profiles', 'ProfileController@viewAllProfiles');


//    Any Profile
    Route::get('profile/create', 'ProfileController@viewCreateProfile')->name('viewCreateProfile');
    Route::get('profile/{id}', 'ProfileController@viewProfile');



    Route::get('profile/edit/{id}', 'ProfileController@viewEditProfile');



    Route::post('profile/edit/{id?}', 'ProfileController@editProfile');

    Route::post('profile/create', 'ProfileController@createProfile');

    Route::get('customers', 'CustomerController@allCustomers');
    Route::get('customer/{id}', 'CustomerController@viewCustomer');

    Route::get('customer/edit/{id}', 'CustomerController@editCustomer');
    Route::post('customer/edit/{id}', 'CustomerController@createEditCustomer');

    Route::get('customers/create',function (){
        return view('customer.create');
    });
    Route::post('customers/create', 'CustomerController@createEditCustomer');





    Route::get('reports',function (){
        return view('reports.search');
    });
    Route::post('reports', 'ReportController@search');
    Route::post('reports/result', 'ReportController@search');
});