<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthController extends Controller
{
    public function login(): RedirectResponse
    {
        $user = User::find(1);
        Auth::login($user);
        return redirect()->route('home');
    }


    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function onlyAdmins()
    {
        //Auth::user()->can('user_is_admin');
        if(Gate::allows('user_is_admin')) echo "Bem-Vindo admin";
        else echo "NOK2";
    }

    public function onlyUsers()
    {
        //Auth::user()->cannot('user_is_admin');
        if(Gate::denies('user_is_admin')) echo "Bem-vindo user";
        else echo "NOK";
    }
}
