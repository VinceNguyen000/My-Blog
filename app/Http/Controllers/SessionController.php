<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class SessionController extends Controller
{
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success', 'Logged Out');
    }

    public function create(){

        return view('sessions.create');
    }

    public function store(){
        $logginAttributes = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if(! auth()->attempt($logginAttributes)){
            //        return back()
            //            ->withInput()
            //            ->withErrors(['email'=> 'Cannot find the provided credentials']);

            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'Cannot not verify provided credentials!'
            ]);

            session()->regenerate(); //prevent session fixation attack

            return redirect('/')->with('success', 'Welcome Back!');
        }





    }
}
