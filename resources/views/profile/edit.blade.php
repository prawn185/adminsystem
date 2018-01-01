@extends('layouts.admin')

@section('content')


    <section class="user-profile">
        <div class="container">
            <div class="user">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <h1>{{$user->id}}: {{$user->name}}</h1>
                        </div>
                    </div>
                </div>
                <section class="details">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Edit Details:</h3>
                            <div class="row">
                                <div class="col-lg-6">

                                    {{Form::open(array('action' => array('ProfileController@editProfile', $user->id)))}}

                                    {{Form::label('name', 'Name') }}
                                    {{Form::text('name', $user->name, ['class' => 'form-control']) }}

                                    {{Form::label('email', 'Email') }}
                                    {{Form::text('email', $user->email, ['class' => 'form-control']) }}

                                    {{Form::label('date_of_birth', 'Date of Birth') }}
                                    {{Form::text('date_of_birth', $user->date_of_birth, ['class' => 'form-control']) }}

                                    {{Form::label('team', 'Team') }}
                                    {{Form::text('team', $user->team, ['class' => 'form-control']) }}

                                    {{Form::label('working_hours', 'Working Hours(Minutes)') }}
                                    {{Form::text('working_hours', $user->working_hours, ['class' => 'form-control']) }}

                                    {{Form::submit('Submit',['class' => 'btn btn-success'])}}
                                    {{Form::close()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection