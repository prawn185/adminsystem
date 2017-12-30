<?php
/**
 * Created by PhpStorm.
 * User: Prawn185
 * Date: 22/12/2017
 * Time: 01:58
 */

namespace app\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;

class UserController
{
    //CRUD bah blah blah




    function removeTime($time){

        $user = User::find(Auth::id());
        $user->time_left = $user->time_left - $time ;
        $user->save();
        redirect(back());
    }

}