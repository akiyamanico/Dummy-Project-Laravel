<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index(){
        $data = DB::table('paket')->limit('5')->get();
        $totaluser = DB::table('userdata')->count();
        $totaltiket = DB::table('data_customer')->count();
        $totalharga = DB::table('data_customer')
        ->join('paket', 'data_customer.id_paket', '=', 'paket.id')
        ->sum('paket.harga');
        $totalpaket = DB::table('paket')->where('tersedia','Tersedia')->count();
    
        return view('Admin/AdminDashboard', compact('data', 'totaluser', 'totaltiket', (['totalharga']), 'totalpaket'));
    }
}
