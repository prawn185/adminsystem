@extends('layouts.admin')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Completed Tasks</h1>
            </div>
        </div>
        <div class="row">
            <div class="task-list">
                <div class="col-lg-12">
                    @foreach($tasks as $task)
                        <?php
                        $time_left =  (int)$task->total_time - (int)$task->time_used;
                        ?>
                        <div class="task">
                            <div class="row no-gutters">
                                <div class="col-lg-3">
                                    <div class="title">
                                        <h3>{{$task->title}}</h3>
                                        <div class="task-buttons">
                                            <h6><a href="{{URL::to('tasks/view', $task->id)}}">View Task</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="description"><p>{{$task->description}}</p></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="task-details">
                                        <h6 style="background-color:{{priorityColors($task->priority)}} ">Priority: {{$task->priority}}</h6>
                                        <h6 style="background-color:#15cc15">Status: {{$task->status}}</h6>
                                        <h6>Assigned To: {{app\User::find($task->assignedTo)['name']}}</h6>
                                        <h6>Created By: {{app\User::find($task->createdBy)['name']}}</h6>
                                        <h6>Total Time: {{$task->total_time}}</h6>
                                        <h6 @if($time_left < 0 ){{"style=background-color:#d83845"}} @endif >Time Left: {{$time_left}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection