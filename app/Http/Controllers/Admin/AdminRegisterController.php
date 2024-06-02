<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function index(){
        return view('Admin/AdminRegister');
    }
    public function register(AdminRequest $r)
    {
        if ($r->validated()) {
            DB::table('admin_data')->insert([
                'nama' => $r->nama,
                'email' => $r->email,
                'username' => $r->username,
                'password' => Hash::make($r->password)
            ]);
            return redirect('/')->with('pesan', 'Registrasi Berhasil');
        }
    }
}

