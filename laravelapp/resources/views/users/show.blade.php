@extends('layouts.app')

@section('content')
  {!! Form::open(['action' => ['UsersDataController@destroy', $user->id], 'method' => 'POST'])!!}
  <div class="card text-center">
  <div class="card-header" style="margin-bottom:10px;">
    User {{$user->id}}
  </div>
  <div class="card-block" style="margin-bottom:20px;">
    <h4 class="card-title">{{$user->name}}</h4>
    <p class="card-text">{{$user->email}}</p>
    <a href="/users/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
    <a href="/users" class="btn btn-secondary">back</a>
    <a>
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    </a>
    </div>
</div>
{!! Form::close() !!}

@endsection
