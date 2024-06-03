<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminListPaketController extends Controller
{
    public function index(){
        $data = DB::table('paket')->get();
        return view('Admin/AdminListPaket', compact('data'));
    }
}
