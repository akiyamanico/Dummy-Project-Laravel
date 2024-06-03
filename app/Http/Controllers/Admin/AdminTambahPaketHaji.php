<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminTambahPaketHaji extends Controller
{
    public function index(){
                $data = DB::table('penerbangan')
            ->select(DB::raw("GROUP_CONCAT(CONCAT(namabandara, ' | ', namadaerah) SEPARATOR ' , ') as concatenated_results"))
            ->groupBy('namabandara')
            ->get();
        return view('Admin/AdminTambahPaketHaji', compact('data'));
    }
}
