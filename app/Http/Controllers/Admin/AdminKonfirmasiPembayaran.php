<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminKonfirmasiPembayaran extends Controller
{
    
    public function index() {
        $data = DB::table('data_customer')
            ->join('paket', 'data_customer.id_paket', '=', 'paket.id')
            ->select('data_customer.*', 'paket.harga', 'paket.namapaket')
            ->get();
    
        return view('Admin/AdminKonfirmasiPembayaran', compact('data'));
    }
}
