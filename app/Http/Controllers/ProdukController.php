<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
        $paketdata = DB::table('paket')->get();

        return view('produk', compact('paketdata'));
    }

    
}
