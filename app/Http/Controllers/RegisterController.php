<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    // validation form registration
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        // using bcrypt
        // $validated['password'] = bcrypt($validated['password']);

        // using hashing from laravel
        $validated['password'] = Hash::make($validated['password']);

        // $validated send to user model for create data in DB users
        User::create($validated);

        // alert session send to login page 
        // $request->session()->flash('success', 'Registration was successful!');

        return redirect('/login')->with('success', 'Registration was successful!');
    }
}
