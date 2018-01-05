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
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Achievements</h3>
                        <div class="achievements">
                            <div class="row">

                                @if($created > 0)
                                    <div class="col-lg-3">
                                        <img src="https://www.badgeup.io/assets/img/achievements-and-goals.svg" alt="">
                                        <p>You've created {{$created}} tasks!</p>
                                    </div>
                                @endif
                                @if($completed > 0)
                                    <div class="col-lg-3">
                                        <img src="https://www.badgeup.io/assets/img/achievements-and-goals.svg" alt="">
                                        <p>You've completed {{$completed}} tasks!</p>
                                    </div>
                                @endif
                                @if($created > 0)
                                    <div class="col-lg-3">
                                        <img src="https://www.badgeup.io/assets/img/achievements-and-goals.svg" alt="">
                                        <p>You've created {{$created}} tasks!</p>
                                    </div>
                                @endif
                                @if($completed > 0)
                                    <div class="col-lg-3">
                                        <img src="https://www.badgeup.io/assets/img/achievements-and-goals.svg" alt="">
                                        <p>You've completed {{$completed}} tasks!</p>
                                    </div>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
                <section class="details">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Details</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6>Email: {{$user->email}}</h6>
                                    <h6>Date of Birth: {{$user->date_of_birth}}</h6>
                                    <h6>Date Joined: {{$user->created_at}}</h6>
                                    <h6>Team: {{$user->team}}</h6>
                                    <h6>How many tasks: {{$assigned_to}}</h6>
                                </div>
                                <div class="col-lg-6">
                                    <h6>Working Hours: {{$user->working_hours}}</h6>
                                    <h6>Time Left: {{$user->time_left}}</h6>
                                    <h6>Tasks Completed: {{$completed}}</h6>
                                    <h6>Tasks Created: {{$created}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection