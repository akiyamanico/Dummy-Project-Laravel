<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaketRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminEditPaketHajiController extends Controller
{
    public function update(PaketRequest $r){
        if($r->validated()){
            $data['namapaket'] = $r->namapaket;
            $data['harga'] = $r->harga;
            $data['deskripsi'] = $r->deskripsi;
            $data['durasi'] = $r->durasi;
            $data['tersedia'] = $r->tersedia;
            $data['tanggalberangkat'] = $r->tanggalberangkat;
            $data['asalkeberangkatan'] = $r->asalkeberangkatan;
            DB::table('paket')->where('id', $r->id)->update($data);
            return redirect()->route('adminlistpaket');

        }
    }
    public function index($id){
        $data = DB::table('paket')->find($id);
        $dataresult = DB::table('penerbangan')
        ->select(DB::raw("GROUP_CONCAT(CONCAT(namabandara, ' | ', namadaerah) SEPARATOR ' , ') as concatenated_results"))
        ->groupBy('namabandara')
        ->get();
        return view('Admin/AdminEditPaketHaji', compact('data','dataresult'));
    }
}
