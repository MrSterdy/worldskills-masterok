<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Requests\LoginRequest;
use App\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function viewLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::validate($credentials))
            return Redirect::route('login.view')->withErrors(__('auth.failed'));

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return Redirect::intended();
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect::route('login.view');
    }

    public function viewRegister()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        Auth::login($user);

        return Redirect::to('/');
    }
}
