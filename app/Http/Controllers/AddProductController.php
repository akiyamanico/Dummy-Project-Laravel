<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\FileHelper;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;

class AddProductController extends Controller
{
    public function index(){

        return view('tambahproduk');
    }

    public function store(ProdukRequest $r){

        if($r->validated()){
            $gambar = $r->gambar->hashName();
            Log::info('Uploaded File Hash Name: ' . $gambar);
            $r->gambar->move('gambar/', $gambar);
            Produk::create([
                'namaproduk' => $r->namaproduk,
                'harga' => $r->harga,
                'deskripsi' => $r->deskripsi,
                'kategori' => $r->kategori,
                'tersedia' => 'Tersedia',
                'gambar' => $gambar,
                'stok' => 100,
            ]);

            return redirect('produk');
        }
    }
}
