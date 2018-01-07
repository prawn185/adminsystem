@extends('layouts.admin')
@section('content')

    <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <h1>Dashboard</h1>


        <section class="kpi">
            <div class="row">
                <div class="col-lg-12">
                    Show current workflow (Time in Hours) (Will be a calc of all tasks)



                    {{--<div class="task">--}}
                        {{--<div class="row no-gutters">--}}
                            {{--<div class="col-lg-3">--}}
                                {{--<div class="title">--}}

                                    {{--<h3>{{$task->title}}</h3>--}}
                                    {{--<div class="task-buttons">--}}
                                        {{--<h6><a href="{{URL::to('tasks/edit', $task->id)}}">Edit Task</a></h6>--}}
                                        {{--<h6><a href="{{URL::to('tasks/view', $task->id)}}">View Task</a></h6>--}}
                                        {{--<h6><a href="{{URL::to('tasks/complete', $task->id)}}">Complete Task</a></h6>--}}

                                        {{--<h6><a href="#task-id-{{$task->id}}" onclick="showNotes({{$task->id}})">Toggle Notes</a></h6>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-6">--}}
                                {{--<div class="description"><p>{{$task->description}}</p></div>--}}
                            {{--</div>--}}
                            {{--<div class="col-lg-3">--}}
                                {{--<div class="task-details">--}}
                                    {{--<h6 style="background-color:{{priorityColors($task->priority)}} ">Priority: {{$task->priority}}</h6>--}}
                                    {{--<h6>Status: {{$task->status}}</h6>--}}
                                    {{--<h6>Customer: {{ \App\Models\Customer::find($task->customer_id)['name']}}</h6>--}}
                                    {{--<h6>Assigned To: {{app\User::find($task->assignedTo)['name']}}</h6>--}}
                                    {{--<h6>Created By: {{app\User::find($task->createdBy)['name']}}</h6>--}}
                                    {{--     <h6>Updated At: {{Carbon\Carbon::createFromTimestamp($task->updated_at)}}</h6>--}}
                                    {{--<h6>Total Time: {{$task->total_time}}</h6>--}}
                                    {{--<h6 @if($time_left < 0 ){{"style=background-color:#d83845"}} @endif >Time Left: {{$time_left}}</h6>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="notes-area" id="task-id-{{$task->id}}" >--}}
                            {{--<div class="row no-gutters">--}}
                                {{--<div class="col-lg-12">--}}
                                    {{--<div class="notes">--}}

                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-3">--}}
                                                {{--<h6>Time Taken</h6>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-9">--}}
                                                {{--<h6>Description</h6>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--@foreach($task->notes as $note)--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-lg-3">--}}
                                                    {{--{{$note->time}}--}}
                                                {{--</div>--}}
                                                {{--<div class="col-lg-9">--}}
                                                    {{--{{$note->description}}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--@endforeach--}}

                                        {{--{{ Form::open(array('action'=> array('TaskController@addNote', $task->id ),'method'=>'post'))}}--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-lg-9">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--{{Form::label('note_desc', 'Note Description') }}--}}
                                                    {{--{{Form::textarea('note_desc', null, ['class' => 'form-control']) }}--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-lg-3">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--{{Form::label('addtime', 'Add Time') }}--}}
                                                    {{--{{Form::number('addtime', null, ['class' => 'form-control']) }}--}}
                                                {{--</div>--}}
                                                {{--{{Form::submit('Add Note',['class' => 'btn btn-success float-right align-bottom'])}}--}}
                                                {{--{{Form::close()}}--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}





                    How many Critical/High tasks

                </div>
            </div>





        </section>



    </main>


@stop