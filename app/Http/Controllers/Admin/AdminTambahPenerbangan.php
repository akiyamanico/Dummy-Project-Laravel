<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminTambahPenerbangan extends Controller
{
    public function index()
    {

        return view('Admin/AdminTambahPenerbangan');
    }
}
