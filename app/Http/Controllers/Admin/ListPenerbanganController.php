<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListPenerbanganController extends Controller
{
    public function index(){
        $data = DB::table('penerbangan')->get();
        return view('Admin/ListPenerbanganAdmin', compact('data'));
    }
}
