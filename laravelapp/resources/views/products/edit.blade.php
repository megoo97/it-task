@extends('layouts.app')

@section('content')


  <h1>Create new Product</h1>
  {!! Form::open(['action' => ['ProcductsController@update', $product->id], 'method' => 'POST']) !!}
  <div class="form-group">
      <br>
      {{Form::label('name', 'Name')}}
      {{Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Product Name'])}}

      <br>
      {{Form::label('description', 'Description')}}
      {{Form::text('description', $product->description, ['class' => 'form-control', 'placeholder' => 'description'])}}

      <br>
      {{Form::label('price', 'price')}}
      {{Form::number('price',$product->price, ['class' => 'form-control'])}}

      <br>
      {{Form::label('amount', 'Amount')}}
      {{Form::number('amount', $product->amount, ['class' => 'form-control'])}}

      <br>
      {{Form::label('key', 'key')}}
      {{Form::number('key', $product->key, ['class' => 'form-control'])}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit', ['class' => 'btn btn-success'])}}
<a class="btn btn-secondary" href="/products">Back</a>
{!! Form::close() !!}

@endsection


{{-- @extends('layouts.app')

@section('content')


  <h1>Edit product</h1>
  {!! Form::open(['action' => ['ProcductsController@update', $product->id], 'method' => 'POST']) !!}
  <div class="form-group">
      <br>
      {{Form::label('name', 'Name')}}
      {{Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'product Name'])}}

      <br>
      {{Form::label('email', 'E-mail')}}
      {{Form::text('description', $product->description, ['class' => 'form-control', 'placeholder' => 'product description'])}}

      <br>
      {{Form::label('price', 'price')}}
      {{Form::number('price',$product->price , ['class' => 'form-control'])}}

      <br>
      {{Form::label('amount', 'amount')}}
      {{Form::number('amount', $product->amount ['class' => 'form-control'])}}
</div>
  {{Form::hidden('_method','PUT')}}
  {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
  <a class="btn btn-secondary" href="/products">Back</a>
  {!! Form::close() !!}
@endsection --}}
