<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validation

        $formData = request()->validate([
            'name'=>['required','max:50','min:3'],
            'username'=>['required','max:50','min:3',Rule::unique('users', 'username')],
            'email'=>['required','email',Rule::unique('users', 'email')],
            'password'=>['required','min:5','max:50']
        ]);

        $user = User::create($formData);

        //login
        auth()->login($user);

        return redirect('/')->with('success', 'Welcome Dear, '.$user->name);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function post_login()
    {
        $formData = request()->validate([
            'email'=>['required',Rule::exists('users', 'email')],
            'password'=>['required','min:5','max:50']
        ], [
            //for Custom Error Message in Validation
            'email.required'=>'Please Enter Your Email Address.',
            'password.required'=>'Password is need More Than 5 Characters'
        ]);

        //Login Validation
        if (auth()->attempt($formData)) {
            return redirect('/')->with('success', 'Welcome Back');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'User Credentials Wrong'
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Good Bye');
    }
}
