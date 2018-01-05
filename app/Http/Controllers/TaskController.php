<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    function viewTaskList()
    {
        $data = Task\Task::where('assignedTo', Auth::id())->where('status', '!=', 'Completed')->with('notes')->get();

        $users = User::pluck('name','id');

        return view('tasks.tasklist')->with('tasks', $data)->with('users', $users);
    }

    function createTaskView()
    {
        $users = User::pluck('name', 'id');

        return view('tasks.create')->with('users', $users);

    }

    function viewAnotherTaskList($id)
    {
        $data = Task\Task::where('assignedTo', $id)->where('status', '!=', 'Completed')->with('notes')->get();
        $users = User::pluck('name','id');
        return view('tasks.tasklist')->with('tasks', $data)->with('users', $users);
    }

    function createTaskPost(Request $request)
    {

        $task = new Task\Task();
        $task->fill($request->input());
        $task->status = "Open";
        $task->assignedTo = $request->assignedTo;
        $task->customer_id = $request->customer_id;
        $task->total_time = $request->input()['total_time'];
        $task->time_used = 0;

        $task->created_by = Auth::id();
        $task->updated_by = Auth::id();

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
        $task->priority = $request->priority;
        $task->updated_by = Auth::id();
        $task->updated_at = now();
        $task->total_time = $request->input()['total_time'];

        $task->fill($request->input());

        $task->save();




        return redirect('tasks');
    }

    function completeTask(Request $request)
    {

        $task = Task\Task::find($request->id);
        $task->status = "Completed";
        $task->updated_by = Auth::id();
        $task->updated_at = now();
        $task->save();

        return redirect('tasks');
    }

    function viewCompletedTasks()
    {
        $data = Task\Task::where('assignedTo', Auth::id())->where('status', '=', 'Completed')->with('priority')->get();

        return view('tasks.completed')->with('tasks', $data);
    }

    function addNote(Request $request, $task_id){

        $note = new Task\Notes();

        $note->task_id = $task_id;
        $note->description = $request->note_desc;
        $note->time = $request->addtime;
        $note->user_id = Auth::id();
        $note->created_at = now();

        $note->save();

        $task = Task\Task::find($task_id);



        $task->time_used = $task->time_used + $request->addtime;
        $task->updated_by = Auth::id();
        $task->updated_at = now();
        $task->save();

        app('App\Http\Controllers\UserController')->removeTime($request->addtime);

        return redirect('tasks');
    }


}
