@extends('layouts.admin')

@section('content')


    <section class="user-profile">
        <div class="container">
            <div class="user">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title">
                            <h1>Create New Customer</h1>
                        </div>
                    </div>
                </div>
                <section class="details">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Add Details:</h3>
                            <div class="row">
                                <div class="col-lg-6">

                                    {{Form::open(array('action' => array('CustomerController@createEditCustomer')))}}

                                    <div class="form-group">


                                        {{Form::label('name', 'Name') }}
                                        {{Form::text('name', "" , ['class' => 'form-control']) }}

                                        {{Form::label('email', 'Email') }}
                                        {{Form::text('email',"" , ['class' => 'form-control']) }}

                                        {{Form::label('time_per_month', 'Time per month (Minutes)') }}
                                        {{Form::number('time_per_month', "", ['class' => 'form-control']) }}

                                        {{Form::label('billing_rate', 'Bliing Rate') }}
                                        {{Form::number('billing_rate', "", ['class' => 'form-control']) }}

                                        {{Form::label('account_manager', 'Account Manager') }}
                                        {{Form::select('account_manager',\App\User::all()->pluck('name','id'), "", ['class' => 'form-control']) }}

                                        {{Form::label('project_manager', 'Project Manager') }}
                                        {{Form::select('project_manager',\App\User::all()->pluck('name','id'), "", ['class' => 'form-control']) }}
                                    </div>
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
