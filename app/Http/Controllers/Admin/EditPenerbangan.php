<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PenerbanganRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditPenerbangan extends Controller
{
    public function update(PenerbanganRequest $r){
        if($r->validated()){
            DB::table('penerbangan')->where('id', $r->id)->update([
                'namadaerah' => $r->namadaerah,
                'namabandara' => $r->namabandara,
            ]);
            return redirect('/adminlistpenerbangan');
        }
    }
    public function index($id){
        $data = DB::table('penerbangan')->find($id);
        return view('Admin/AdminEditPenerbangan', compact('data'));
    }
}
