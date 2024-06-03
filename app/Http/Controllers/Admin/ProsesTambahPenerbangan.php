<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PenerbanganRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProsesTambahPenerbangan extends Controller
{
    public function tambah(PenerbanganRequest $r){
        if ($r->validated()){
            DB::table('penerbangan')->insert([
                'namadaerah' => $r->namadaerah,
                'namabandara' => $r->namabandara,
            ]);
            return redirect('adminlistpenerbangan')->with('pesan', 'Penambahan Penerbangan Berhasil');
        }
    }
}
