@extends('layouts.admin')
@section('content')

    {{--<input class="flatpickr flatpickr-input active" id="datepicker" type="text" placeholder="Select Date.." readonly="readonly">--}}



    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Reports</h1>
            </div>
        </div>
        {{Form::open(array('action'=> array('ReportController@search'),'method'=>'post'))}}
        <div class="form-group">


            <div class="row">
                <div class="col-lg-3">
                    {{Form::label('user', 'User') }}
                    {{Form::select('user',  \App\User::all()->pluck('name','id'),"", ['class' => 'form-control', 'placeholder'=>'All']) }}


                </div>
                <div class="col-lg-3">
                    {{Form::label('customer', 'Customer') }}
                    {{Form::select('customer', \App\Models\Customer::all()->pluck('name','id'),"", ['class' => 'form-control',  'placeholder'=>'All']) }}
                </div>

                <div class="col-lg-3">
                    {{Form::label('datestart', 'Start') }}
                    {{Form::text('datestart', '', ['class' => 'form-control flatpickr flatpickr-input active','id'=>'datepicker','placeholder'=>'Select Date...','readonly'=>'readonly']) }}
                </div>
                <div class="col-lg-3">
                    {{Form::label('dateend', 'End') }}
                    {{Form::text('dateend', '', ['class' => 'form-control flatpickr flatpickr-input active','id'=>'datepicker','placeholder'=>'Select Date...','readonly'=>'readonly']) }}
                </div>


            </div>
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-success float-right'])}}
        {{Form::close()}}
    </div>


@endsection