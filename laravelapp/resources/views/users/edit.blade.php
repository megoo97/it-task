@extends('layouts.app')

@section('content')


  <h1>Edit user</h1>
  {!! Form::open(['action' => ['UsersDataController@update', $user->id], 'method' => 'POST']) !!}
  <div class="form-group">
      <br>
      {{Form::label('name', 'Name')}}
      {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'User Name'])}}

      <br>
      {{Form::label('email', 'E-mail')}}
      {{Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'User E-mail address'])}}

      <br>
      {{Form::label('password', 'password')}}
      {{Form::password('password', ['class' => 'form-control'])}}

      <br>
      {{Form::label('password_confirmation', 'Confirm password')}}
      {{Form::password('password_confirmation', ['class' => 'form-control'])}}
</div>
  {{Form::hidden('_method','PUT')}}
  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
  <a class="btn btn-secondary" href="/users">Back</a>
  {!! Form::close() !!}
@endsection
