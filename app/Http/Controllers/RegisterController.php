<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\UserData;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(RegRequest $r){
        if ($r->validated()){
            DB::table('UserData')->insert([
                'nama' => $r->nama,
                'email' => $r->email,
                'username' => $r->username,
                'telepon' => $r->nomortelp,
                'password' => Hash::make($r->password)
            ]);
            return redirect('/')->with('pesan', 'Registrasi Berhasil');
        }
    }
}
