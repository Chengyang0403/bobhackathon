@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('username', 'Name') !!}
                    {!! Form::text('username', old('username'), ['class' => 'form-control']) !!}
                    <input  class="ef" name="username" type="text" value= "{{old('username')}}" autocomplete="off">
                </div>
                
                <div>
                {!! Form::label('gender', '性別') !!}
                        {{Form::select('gender', [
                        'Male' => '男性',
                        'Female' => '女性']
                        )}}
                </div>
                
                <div class="form-group">
                    {!! Form::label('intro', 'Intro') !!}
                    {!! Form::text('intro', old('intro'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection