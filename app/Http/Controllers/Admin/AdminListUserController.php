<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminListUserController extends Controller
{
    public function index(){
        $data = DB::table('UserData')->select('nama', 'email', 'username', 'telepon')->get();
        return view('Admin/AdminListUser', compact('data'));
    }
}
