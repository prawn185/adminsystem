<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function createProfile(){

        return view('profile.create');
    }
    function viewMyProfile()
    {
        $data = User::find(Auth::id());

        $tasks_completed = Task\Task::where('assignedTo', Auth::id())->where('status','Completed')->count();

        $tasks_created = Task\Task::where('created_by', Auth::id())->count();;

        return view('profile.view')->with('user', $data)->with('created', $tasks_created)->with('completed', $tasks_completed);
    }
    function viewAllProfiles(){

        $data = User::all();

        return view('profile.all')->with('users', $data);
    }
    function viewProfile($id){
        $data =  User::find($id);

        $tasks_completed = Task\Task::where('assignedTo', $data->id)->where('status','Completed')->count();

        $tasks_created = Task\Task::where('created_by', $data->id)->count();

        return view('profile.view')->with('user', $data)->with('created', $tasks_created)->with('completed', $tasks_completed);
    }
    function viewEditProfile($id){

        $data =  User::find($id);

        return view('profile.edit')->with('user', $data);
    }

    function editProfile(Request $request, $id = null){

        if($id != ""){
            $user = User::find($id);
        }else{
            $user = new User();
        }

        if(isset($request->password)){
            $user->password = bcrypt($request->password);
        }

        $user->updated_at = now();
        $user->time_left = $request->working_hours;

        $user->fill($request->input());

        $user->save();

        return redirect('profiles');

    }



}
