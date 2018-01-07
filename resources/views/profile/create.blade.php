@extends('layouts.admin')

@section('content')


    <section class="user-profile">
        <div class="container">
            <div class="user">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <h1>Create New User</h1>
                        </div>
                    </div>
                </div>
                <section class="details">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Add Details:</h3>
                            <div class="row">
                                <div class="col-lg-6">

                                    {{Form::open(array('action' => array('ProfileController@createProfile')))}}

                                    {{Form::label('name', 'Name') }}
                                    {{Form::text('name', "" , ['class' => 'form-control']) }}

                                    {{Form::label('password', 'Password') }}
                                    {{Form::password('password', ['class' => 'form-control']) }}

                                    {{Form::label('email', 'Email') }}
                                    {{Form::email('email', "", ['class' => 'form-control']) }}

                                    {{--{{Form::label('date_of_birth', 'Date of Birth') }}--}}
                                    {{--{{Form::text('date_of_birth', "", ['class' => 'form-control', "placeholder","dd/mm/yy"]) }}--}}

                                    {{Form::label('team', 'Team') }}
                                    {{Form::text('team', "", ['class' => 'form-control']) }}

                                    {{Form::label('working_hours', 'Working Hours(Minutes)') }}
                                    {{Form::text('working_hours', "480", ['class' => 'form-control']) }}

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
