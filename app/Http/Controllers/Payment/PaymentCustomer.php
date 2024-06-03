<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\PaymentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentCustomer extends Controller
{
    public function payment(PaymentRequest $r){
        if($r->validated()){
            $bukti = $r->buktipembayaran->hashName();
            $r->buktipembayaran->move('buktipembayaran',$bukti);
            DB::table('data_customer')->insert([
                'nama' => $r->nama,
                'email' => $r->email,
                'telpon' => $r->telpon,
                'tanggallahir' => $r->tanggallahir,
                'alamat' => $r->alamat,
                'buktipembayaran' => $bukti,
                'statuspembayaran' => 'Belum Dikonfirmasi',
                'id_paket' => $r->id_paket,
            ]);
            return redirect('/');
        }
    }
}
