<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        //validation

        request()->validate([
            'name'=>['required','max:50','min:3'],
            'username'=>['required','max:50','min:3'],
            'email'=>['required','email'],
            'password'=>['required','min:5','max:50']
        ]);

        dd('success');
    }
}
