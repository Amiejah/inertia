<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        return inertia('Users/Index', [
            'users' => User::get()
        ]);
    }

    public function create()
    {
        return inertia('Users/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create($validated);

        return Redirect::route('users.index')->with('success', 'Contact created.');
    }

    public function edit(User $user)
    {
        return inertia('Users/Edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email'=> 'required|email',
            // 'password'=> '',
        ]);

        $user->update($validated);

        return Redirect::back()->with('success', 'User updated.');
    }
}
