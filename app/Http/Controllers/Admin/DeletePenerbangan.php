<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeletePenerbangan extends Controller
{
    public function delete($id){
        DB::table('penerbangan')->where('id', $id)->delete();
        return back();
    }
}
