<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class SessionController extends Controller
{
    public function destroy(): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        auth()->logout();
        return redirect('/')->with('success', 'Logged Out');
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('sessions.create');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\Foundation\Application
    {
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
