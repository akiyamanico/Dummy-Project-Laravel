<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaketRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminTambahPaketHajiProses extends Controller
{
    public function tambah(PaketRequest $r){
        if ($r->validated()){
            DB::table('paket')->insert([
                'namapaket' => $r->namapaket,
                'harga' => $r->harga,
                'deskripsi' => $r->deskripsi,
                'durasi' => $r->durasi,
                'tersedia' => $r->tersedia,
                'tanggalberangkat' => $r->tanggalberangkat,
                'asalkeberangkatan' => $r->asalkeberangkatan,
            ]);
            return redirect('adminlistpaket')->with('pesan', 'Penambahan Paket Berhasil!');
        }
    }
}
