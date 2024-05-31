<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteProductRequest;
use App\Http\Requests\ProdukRequest;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DelProductController extends Controller
{
    public function delete(DeleteProductRequest $r, $id){
        $cek = Produk::where('id', $id)->first();
        if ($cek && File::exists(public_path('gambar/' . $cek->gambar))) {
            File::delete(public_path('gambar/' . $cek->gambar));
        }
        if ($cek) {
            $cek->delete();
        }
        return redirect()->route('produk')->with('success', 'Data Berhasil Dihapus');
    }
}
