@extends('layouts.app')

@section('content')
  <h1>products</h1>
  @if (count($products) > 0)
    <table class="table">
      <thead class="thead-default">
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Amount</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
          <td><a href="/products/{{$product->id}}">{{$product->name}}</a></td>
          <td>{{$product->description}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->amount}}</td>
          <td class="row">
            <a class="btn btn-info" href="/products/{{$product->id}}">View</a>
            <a href="/products/{{$product->id}}/edit" style="margin-left:10px;" class="btn btn-warning">Edit</a>
            <a>
                {!! Form::open(['action' => ['ProcductsController@destroy', $product->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger', 'style' => 'margin-left:10px;'])}}
                {!! Form::close() !!}
            </a>
          </td>
          </tr>
        @endforeach
      </tbody>
      <td><a class="btn btn-primary" href="/products/create">Create product</a></td>
    </table>
  @else
    <p>No products exist <a class="btn btn-primary" href="/create">Create product</a> </p>
  @endif

@endsection
