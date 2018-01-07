<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task\Task as Task;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {

            $task = Task::where('assignedTo', Auth::id())->where('status', '!=', 'Completed')->orderBy('created_at', 'desc')->with('notes')->first();


            $tasks = Task::where('assignedTo', Auth::id())->where('status', '!=', 'Completed')->get();
            foreach ($tasks as $task){

                $total_time = $task->total_time;
                $high_tasks = $task->total_time;

            }

//        Add up all  task and output in hours

//        Count high/critical tasks

//            dd(1);
            return view('pages/admin')->withTask('task');
        } else {
            return View::make('auth.login');
        }

    }
    public function username()
    {
        return 'username';
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }
}
