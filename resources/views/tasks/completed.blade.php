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
                        <div class="task">
                            <div class="row no-gutters">
                                <div class="col-lg-3">
                                    <div class="title">
                                        <h3>{{$task->title}}</h3>
                                        <div class="task-buttons">
                                            <h6><a href="{{URL::to('tasks/edit', $task->id)}}">Edit Task</a></h6>
                                            <h6><a href="{{URL::to('tasks/view', $task->id)}}">View Task</a></h6>
                                            <h6><a href="{{URL::to('tasks/complete', $task->id)}}">Complete Task</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="description"><p>{{$task->description}}</p></div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="task-details">
                                        <h6>Status: {{$task->status}}</h6>
                                        {{--<h6>Priority: {{$priority}}</h6>--}}
                                        <h6>Assigned To: {{$task->assignedTo}}</h6>
                                        <h6>Assigned By: {{$task->assignedBy}}</h6>
                                        <h6>Updated At: {{$task->updated_at}}</h6>
                                        <h6>Time Left: {{$task->time}}</h6>
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