<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    function viewMyProfile()
    {
        $data = User::find(Auth::id());

        $tasks_completed = Task\Task::where('assignedTo', Auth::id())->where('status','Completed')->count();;

        $tasks_created = Task\Task::where('created_by', Auth::id())->count();;

        return view('profile.view')->with('user', $data)->with('created', $tasks_created)->with('completed', $tasks_completed);
    }


}
