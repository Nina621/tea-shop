<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['city'])->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'city_id' => 'required',
        ]);
        Post::create($request->all());
        return redirect()->route('users.index')->with('success','Post created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'city_id' => 'required',
        ]);
        $user->update($request->all());
        return redirect()->route('users.index')->with('success','Post updated successfully');
    }

    public function destroy(User $user)
    {
         $user->delete();
         return redirect()->back();
    }
}