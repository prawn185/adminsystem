@extends('layouts.admin')
@section('content')
    <section class="view-task">
        <div class="container">
            <h4>Creating a new task</h4>
            {{Form::open(array('action'=> array('TaskController@createTaskPost'),'method'=>'post'))}}
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-12">
                        {{Form::label('title', 'Title') }}
                        {{Form::text('title', null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        {{Form::label('priority', 'Priority') }}
                        {{Form::select('priority',['Critical' => 'Critical','High' => 'High','Normal'=>'Normal','Low'=>'Low','None'=>'None'], "Normal" ,['class' => 'form-control'])
                        }}
                    </div>
                    <div class="col-lg-6">
                        {{Form::label('assignedTo', 'Assigned To') }}
                        {{Form::select('assignedTo',\App\User::all()->pluck('name','id'),null,['class' => 'form-control'])}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        {{Form::label('total_time ', 'Allocated Time') }}
                        {{Form::number('total_time', 30, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {{Form::label('description', 'Description') }}
                {{Form::textarea('description', null, ['class' => 'form-control']) }}
            </div>

            {{Form::submit('Submit',['class' => 'btn btn-success float-right'])}}
            {{Form::close()}}
        </div>
    </section>


@endsection