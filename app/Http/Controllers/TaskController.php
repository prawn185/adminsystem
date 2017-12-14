<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{

//    Create Read Update Delete


    function viewTasks(){
//    Get all tasks where user ID = current user ID
        $data = DB::table('task')->where('assignedTo', Auth::id())->get();

        return view('tasks.tasklist')->with('tasks', $data);
    }
    function createTask(){



    }
    function readTask(){

    }
    function updateTask(){

    }
    function deleteTask(){

    }



}
