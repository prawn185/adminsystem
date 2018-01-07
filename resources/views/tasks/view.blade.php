
@extends('layouts.admin')
@section('content')

    <section class="view-task">
        <div class="container">
            <div class="task">
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="title">
                            <h3>{{$task->title}}</h3>
                            <div class="task-buttons">
                                <h6><a href="{{URL::to('tasks')}}">Task List</a></h6>
                                <h6><a href="{{URL::to('tasks/view', $task->id)}}">Edit Task</a></h6>
                                <h6><a href="">Complete Task</a></h6>
                            </div>
                            <div class="task-details">
                                <h6>Status: {{$task->status}}</h6>
                                <h6>Priority: {{$task->priority}}</h6>
                                <h6>Assigned To: {{$task->assignedTo}}</h6>
                                <h6>Assigned By: {{$task->assignedBy}}</h6>
                                <h6>updated At: {{$task->updated_at}}</h6>
                                <h6>Due At: {{$task->time}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="description"><p>{{$task->description}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection