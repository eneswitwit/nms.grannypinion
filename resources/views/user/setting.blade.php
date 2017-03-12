@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-10">
                <h2>Einstellungen</h2>
                <img src="/uploads/avatars/{{$user->avatar}}" style="width:150px;height:150px; float:left; border-radius:50%; margin-right:25px">
                </img>
                <form enctype="multipart/form-data" action="{{ route('user.avatar',['user' => Auth::user()]) }}" method="POST">
                    <label>Lade ein neues Profilbild hoch.</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
            <div class="col-md-10">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <label for="firstname" class="col-md-4 control-label">Vorname</label>
                        <div class="col-md-6">
                            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ Auth::user()->firstname }}" required autofocus>
                            @if ($errors->has('firstname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <label for="lastname" class="col-md-4 control-label">Nachname</label>
                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ Auth::user()->lastname }}" required autofocus>
                            @if ($errors->has('lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_notification" class="col-md-4 control label"> Email Benachrichtigung</label>
                        <div class="col-md-6">
                            <input type="checkbox" id="email_notification" name="email_notification" @if(!Auth::user()->email_notifications) checked @endif> Email Benachrichtigung abstellen<br>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                            Ändern
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection