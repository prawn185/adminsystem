<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

//    Create Read Update Delete

//    public function get($id = false)
//    {
//        if($id){
//            $data = Task\Task::find($id)->with('priority')->first();
//            return view('tasks.view')->with('task', $data);
//        }
//        else{
//            $data = Task\Task::all();
//            return view('tasks.tasklist')->with('tasks', $data);
//        }
//    }


    function viewTaskList()
    {
//    Get all tasks where user ID = current user ID
        $data = Task\Task::where('assignedTo', Auth::id())->where('status','!=','Completed')->with('priority')->get();
        foreach($data as $task){

            //$priority = Task\Priority::find($task->priority)->first();
        }
        $priority = "Null";


        return view('tasks.tasklist')->with('tasks', $data)->with('priority', $priority);
    }

    function createTaskView()
    {

        $users = User::pluck('name','id');

        return view('tasks.create')->with('users',$users);

    }
    function createTaskPost(Request $request)
    {

        $task = new Task\Task();
        $task->status = "Open";
        $task->time_left = 1;
        $task->user_id = Auth::id();
        $task->fill($request->input());
        $task->save();
        return redirect('tasks');
    }

    function viewSingleTask($id)
    {

        $data = Task\Task::find($id)->with('priority')->first();


        return view('tasks.view')->with('task', $data);
    }

    function editSingleTask($id)
    {
        $data = Task\Task::where('id', $id)->with('priority')->first();
        $priorities = Task\Priority::orderBy('Level', 'desc')->pluck('name', 'id');


        return view('tasks.edit')->with('task', $data)->with('priorities', $priorities);
    }

    function editTask(Request $request)
    {

        $task = Task\Task::find($request->id);
        $task->fill($request->input());
        $task->save();

        return redirect('tasks');
    }

    function completeTask(Request $request)
    {

        $task = Task\Task::find($request->id);
        $task->status = "Completed";
        $task->save();

        return redirect('tasks');
    }

    function viewCompletedTasks(){
        $data = Task\Task::where('assignedTo', Auth::id())->where('status','=','Completed')->with('priority')->get();

        return view('tasks.completed')->with('tasks', $data);
    }

}
