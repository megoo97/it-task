<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsersDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =  User::all();
        return view('users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('users.create');

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
      'email' => 'required',
      'password' => 'required|string|min:6|confirmed',

      ]);
      $user = new user;
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = $request->input('password');
      $user->save();
      return redirect('/users')->with('success', 'User Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $users = User::find($id);
      return view('users.show')->with('user', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      return view('users.edit')->with('user', $user);

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
      'email' => 'required',
      'password' => 'required|string|min:6|confirmed',
      ]);

      $user = User::find($id);
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = $request->input('password');
      $user->save();
      return redirect('/users')->with('success', 'User updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect('/users')->with('success', 'User Deleted');
    }
}
