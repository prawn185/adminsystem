@extends('layouts.admin')
@section('content')


    <section class="all-profiles">
        <div class="container">
            <h1>All Profiles</h1>
            @foreach($customers as $customer)
                <div class="user">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title">
                                <a href="{{URL::to('customer', $customer->id)}}">{{$customer->id}}: {{$customer->name}} </a>

                                <a href="{{URL::to('customer/edit', $customer->id)}}" >Edit</a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection