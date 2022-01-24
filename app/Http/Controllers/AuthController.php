<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('register.create');
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


        //already taken => Rule::unique('table','cplumn'); note ****

        User::create($formData);

        return redirect('/');
    }
}
