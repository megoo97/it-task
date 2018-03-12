@extends('layouts.app')

@section('content')
  <h1>Users</h1>
  @if (count($users) > 0)
    <table class="table">
      <thead class="thead-default">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr>
          <td>{{$user->id}}</td>
          <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
          <td>{{$user->email}}</td>
          <td>
            <a class="btn btn-info" href="/users/{{$user->id}}">View</a>
            <a href="/users/{{$user->id}}/edit" class="btn btn-warning">Edit</a>
            <a>
                {!! Form::open(['action' => ['UsersDataController@destroy', $user->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            </a>
          </td>
          </tr>
        @endforeach
      </tbody>
      <td><a class="btn btn-primary" href="/users/create">Create user</a></td>
    </table>
  @else
    <p>No Users exist <a class="btn btn-primary" href="/create">Create user</a> </p>
  @endif

@endsection
