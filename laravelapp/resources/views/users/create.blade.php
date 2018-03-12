@extends('layouts.app')

@section('content')


  <h1>Create new user</h1>
  {!! Form::open(['action' => 'UsersDataController@store', 'method' => 'POST']) !!}
  <div class="form-group">
      <br>
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'User Name'])}}

      <br>
      {{Form::label('email', 'E-mail')}}
      {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'User E-mail address'])}}

      <br>
      {{Form::label('password', 'password')}}
      {{Form::password('password', ['class' => 'form-control'])}}

      <br>
      {{Form::label('password_confirmation', 'password_confirmation')}}
      {{Form::password('password_confirmation', ['class' => 'form-control'])}}
</div>
  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
  <a class="btn btn-secondary" href="/users">Back</a>
  {!! Form::close() !!}
@endsection
