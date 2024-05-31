<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function index($id){
        $paketdata = DB::table('paket')->where('id', $id)->first();
        return view('ProductDetail', compact('paketdata'));
    }

}
