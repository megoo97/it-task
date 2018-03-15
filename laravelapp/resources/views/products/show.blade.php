@extends('layouts.app')

@section('content')
  {!! Form::open(['action' => ['ProcductsController@destroy', $product->id], 'method' => 'POST'])!!}
  <div class="card text-center">
  <div class="card-header" style="margin-bottom:10px;">
    product {{$product->id}}
  </div>
  <div class="card-block" style="margin-bottom:20px;">
    <h4 class="card-title">{{$product->name}}</h4>
    <p class="card-text">{{$product->description}}</p>
    <p class="card-text">Price: {{$product->price}}</p>
    <p class="card-text">Amount: {{$product->amount}}</p>
    <a href="/products/{{$product->id}}/edit" class="btn btn-warning">Edit</a>
    <a href="/products" class="btn btn-secondary">back</a>
    <a>
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    </a>
    </div>
</div>
{!! Form::close() !!}

@endsection
