<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProsesKonfirmasi extends Controller
{
    public function konfirmasi($id){
         DB::table('data_customer')
        ->where('id', $id)
        ->update(['statuspembayaran' => 'Telah Dikonfirmasi!']);

        return redirect('adminkonfirmasipembayaran');
    }
}
