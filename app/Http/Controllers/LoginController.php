<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(LoginRequest $r)
    {
        if ($r->validated()) {
            if (
                Auth::guard('web')->attempt(
                    [
                        'username' => $r->username,
                        'password' => $r->password
                    ]
                )
            ) {
                return redirect('home')->with('pesan', $r->username);
            } else {
                return back()->with('pesan', 'Username atau Password Salah!');
            }
        }
        return back()->withErrors($r->errors());
    }
}
