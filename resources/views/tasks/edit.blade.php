@extends('layouts.admin')
@section('content')
    <section class="view-task">
        <div class="container">
            <h4>Editing Task:- {{$task->title}}</h4>
            {{Form::open(array('action'=> array('TaskController@editTask', $task->id ),'method'=>'post'))}}
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        {{Form::label('title', 'Title') }}
                        {{Form::text('title', $task->title, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        {{ Form::label('priority', 'Priority') }}
                        {{Form::select('priority', ['Critical' => 'Critical','High' => 'High','Normal'=>'Normal','Low'=>'Low','None'=>'None'],$task->priority ,['class' => 'form-control'])
                        }}
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('assignedTo', 'Assigned To') }}
                        {{Form::select('assignedTo', \App\User::all()->pluck('name','id') ,$task->assignedTo ,['class' => 'form-control'])}}

                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        {{Form::label('total_time ', 'Time Allocated') }}
                        {{Form::number('total_time', $task->total_time, ['class' => 'form-control']) }}
                    </div>

                </div>
            </div>

            <div class="form-group">
                {{Form::label('desc', 'Description') }}
                {{Form::textarea('desc', $task->description, ['class' => 'form-control']) }}
            </div>

            {{Form::submit('Submit',['class' => 'btn btn-success float-right'])}}
            {{Form::close()}}
        </div>
    </section>


@endsection