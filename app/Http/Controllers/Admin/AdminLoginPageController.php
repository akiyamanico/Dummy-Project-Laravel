<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginPageController extends Controller
{
    public function index(){
        return view('Admin/AdminLogin');
    }

    public function loginadmin(AdminRequest $r){
        if ($r->validated()) {
            if (
                Auth::guard('admin')->attempt(
                    [
                        'username' => $r->username,
                        'password' => $r->password
                    ]
                )
            ) {
                return redirect('admindashboard');
            } else {
                return back()->with('pesan', 'Username atau Password Salah!');
            }
        }
        return back()->withErrors($r->errors());
    }
}
