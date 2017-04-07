@extends('layouts.app')

@section('content')
    @foreach ($users as $user)
    <div class="container">
        <div class="row" style="margin-top:2em;">
            <div class="col-md-10 col-md-offset-1" style="border-style: solid;border-width: 0px;">
                <div class="row" style="border-style: solid; border-width: 0px; box-shadow: 0.2px 0.2px 0.2px 0.2px grey; background-color: #fdfdfd;">
                    <img src="/uploads/avatars/{{$user->avatar}}" style="width:100px; height:100px;float:left;margin-right:25px">
                        </img>
                        <h3>
                            {{$user->firstname}} {{$user->lastname}}
                        </h3>
                        <a href="/{{$user->id}}">
                            <button class="btn btn-primary btn-md">
                                Profile
                            </button>
                        </a>
                        <a href="/{{$user->id}}/feedback/create">
                            <button class="btn btn-primary btn-md">
                                Feedback
                            </button>
                        </a>
                        <a href="/{{$user->id}}/message">
                            <button class="btn btn-primary btn-md disabled">
                                Anonymous Message
                            </button>
                        </a>


                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection