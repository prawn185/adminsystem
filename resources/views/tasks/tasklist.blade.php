@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Task List</h1>
                <div class="btn btn-success">Create Task  <i class="fa fa-plus" aria-hidden="true"></i> </div>
            </div>
        </div>
        <div class="row">
            <div class="task-list">
                <div class="col-lg-12">
                    @foreach($tasks as $task)
                        <div class="task">
                            <div class="row no-gutters">
                                <div class="col-lg-3">
                                    <div class="title">
                                        <h3>{{$task->name}}</h3>
                                        <div class="task-buttons">
                                            <h6><a href="">Edit Task</a></h6>
                                            <h6><a href="">View Task</a></h6>
                                            <h6><a href="">Complete Task</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="description"><p>{{$task->description}}</p></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="task-details">
                                        <h6>Status: {{$task->status}}</h6>
                                        <h6>Priority: {{$task->time}}</h6>
                                        <h6>Assigned To: {{$task->assignedTo}}</h6>
                                        <h6>Assigned By: {{$task->assignedBy}}</h6>
                                        <h6>updated At: {{$task->updated_at}}</h6>
                                        <h6>Due At: {{$task->time}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>








@stop