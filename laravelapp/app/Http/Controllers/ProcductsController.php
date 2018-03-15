<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use Auth;

class ProcductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products =  products::all();
      return view('products.index')->with('products',$products);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
      'name' => 'required',
      'description' => 'required',
      'price' => 'required',
      'amount' => 'required',
      'key' => 'required',

      ]);
      $product = new products;
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->amount = $request->input('amount');
      $product->key = $request->input('key');
      $product->save();
      return redirect('/products')->with('success', 'product Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $products = products::find($id);
      return view('products.show')->with('product', $products);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = products::find($id);
      return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
      'name' => 'required',
      'description' => 'required',
      'price' => 'required',
      'amount' => 'required',
      'key' => 'required',
      ]);

      $product = products::find($id);
      $product->name = $request->input('name');
      $product->description = $request->input('description');
      $product->price = $request->input('price');
      $product->amount = $request->input('amount');
      $product->key = $request->input('key');
      $product->save();
      return redirect('/products')->with('success', 'product Created Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = products::find($id);
      $product->delete();
      return redirect('/products')->with('success', 'product Deleted');
    }
}
