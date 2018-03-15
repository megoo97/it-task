@extends('layouts.app')

@section('content')


  <h1>Create new Product</h1>
  {!! Form::open(['action' => 'ProcductsController@store', 'method' => 'POST']) !!}
  <div class="form-group">
      <br>
      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Product Name'])}}

      <br>
      {{Form::label('description', 'Description')}}
      {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'description'])}}

      <br>
      {{Form::label('price', 'price')}}
      {{Form::number('price','', ['class' => 'form-control'])}}

      <br>
      {{Form::label('amount', 'Amount')}}
      {{Form::number('amount', '', ['class' => 'form-control'])}}

      <br>
      {{Form::label('key', 'key')}}
      {{Form::number('key', '', ['class' => 'form-control'])}}
</div>
  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
  <a class="btn btn-secondary" href="/users">Back</a>
  {!! Form::close() !!}
@endsection
