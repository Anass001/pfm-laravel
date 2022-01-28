<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use App\Models\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = $request->input('login');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        Auth::attempt([$field => $login, 'password' => $request->password], $request->remember);
        

        if (Auth::check())
        {
            $response = Gate::inspect('access-admin');
            if ($response->allowed())
                return redirect()->route('admin');
            else
                return redirect()->route('home');
        }
        return redirect()->back()->withErrors([
            'credentials' => 'Please verify your email and password'
        ]);
    }
}
