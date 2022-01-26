<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'unique:users|required|max:255',
            'email' => 'unique:users|required|email|max:255',
            'password' => 'required|confirmed|min:8',
            'accept_rule' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::attempt($request->only('email', 'password'));
        
        return redirect()->route('dashboard');
    }
}