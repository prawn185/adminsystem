@extends('layouts.admin')
@section('content')


    <section class="all-profiles">
        <div class="container">
            <h1>All Profiles</h1>
            @foreach($users as $user)
                <div class="user">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title">
                                <a href="{{URL::to('profile', $user->id)}}">{{$user->id}}: {{$user->name}} </a>
                                @if(Auth::user()->team == "Admin")
                                    <a href="{{URL::to('profile/edit', $user->id)}}" >Edit</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection