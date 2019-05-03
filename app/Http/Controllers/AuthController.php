<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login()
    {

        // return request(['email', 'password']);
        $credentials = request()->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->route('profile', ['name' => Auth::User()->name]);

    }else{

    }

}

}
