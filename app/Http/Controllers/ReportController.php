<?php

namespace App\Http\Controllers;

use App\Models\Task\Task;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    function search(Request $request){

        $user = $request->user;
        $customer = $request->customer;
        $start = $request->datestart;
        $end = $request->dateend;

        $query = "";

        $tasks = Task::where(function($query) use ($user, $customer,$start ,$end ) {
            if ( ! empty($user)) {
                $query->where('assignedTo', '=', $user);
            }else{
                $query->where('assignedTo', '!=', 0);
            }
            if ( ! empty($customer)) {
                $query->where('customer_id', '=', $customer);
            }else{
                $query->where('customer_id', '!=', 0);
            }
            if ( ! empty($start) && ! empty($end)) {
                $query->where('created_at', '>=', $start)
                      ->where('created_at', '<=', $end);
            }
        })->get();

        $used_time = 0;
        $allocated_time = 0;
        foreach($tasks as $task){
            $used_time += $task->time_used;
            $allocated_time += $task->total_time;
        }

        return view('reports.result')->with('tasks', $tasks)->with('allocated_time', $allocated_time)->with('used_time', $used_time)->with('total_tasks', count($tasks));

    }

}
