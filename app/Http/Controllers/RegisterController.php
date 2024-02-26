<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
//      return (request()->all());
        $attributes = request()->validate(
            [
                'name' => 'required|max:255',
//                'username' => 'required|max:255|min:3|unique:users,username', //user needs to be unique, users table and username column|a space in var can cause error
                'username' => ['required', 'max: 255', 'min: 3', Rule::unique('users', 'username')],
                'password' => 'required|max:255|min:8',
                'email' => 'required|email|max:255|unique:users,email',
            ]
        );

        $user = User::create($attributes);

        //log user in
        auth()->login($user);

//        session()->flash('success', 'Your account has been created.');

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
