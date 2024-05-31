<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class EditProdukController extends Controller
{
    public function index($id){
        $produk = Produk::where('id', $id)->first();
        return view('editproduk', compact('produk'));
    }
    public function update(ProdukRequest $r, $id){
        if($r->validated()) {
            if($r->gambar){
                $cek = Produk::where('id', $id)->first();
                if(File::exists(public_path('foto/.$cek->gambar'))){
                    File::delete(public_path('foto/.$cek->gambar'));
                }
                $gambar = $r->gambar->hashName();
                $r->gambar->move('foto/', $gambar);
                $data['gambar'] = $gambar;
            }
            $data['namaproduk'] = $r->namaproduk;
            $data['harga'] = $r->harga;
            $data['deskripsi'] = $r->deskripsi;
            $data['kategori'] = $r->kategori;
            $data['tersedia'] = 'Tersedia';
            $data['stok'] = 100;
            Produk::where('id',$id)->update($data);
            return redirect('/produk');
        }
    }
}