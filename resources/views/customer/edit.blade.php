@extends('layouts.admin')

@section('content')


    <section class="user-profile">
        <div class="container">
            <div class="user">
                <section class="details">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3> {{(isset($customer->id)) ? "Edit Details:" : "Create Customer"}}</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{Form::open(array('action' => array('CustomerController@createEditCustomer', $customer->id)))}}

                                        {{Form::hidden('id', $customer->id) }}

                                        {{Form::label('name', 'Name') }}
                                        {{Form::text('name', $customer->name, ['class' => 'form-control']) }}

                                        {{Form::label('email', 'Email') }}
                                        {{Form::text('email', $customer->email, ['class' => 'form-control']) }}

                                        {{Form::label('time_per_month', 'Time per month (Minutes)') }}
                                        {{Form::number('time_per_month', $customer->time_per_month, ['class' => 'form-control']) }}

                                        {{Form::label('billing_rate', 'Bliing Rate') }}
                                        {{Form::number('billing_rate', $customer->billing_rate, ['class' => 'form-control']) }}

                                        {{Form::label('account_manager', 'Account Manager') }}
                                        {{Form::select('account_manager',\App\User::all()->pluck('name','id'), $customer->account_manager, ['class' => 'form-control']) }}

                                        {{Form::label('project_manager', 'Project Manager') }}
                                        {{Form::select('project_manager',\App\User::all()->pluck('name','id'), $customer->project_manager, ['class' => 'form-control']) }}
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