<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentIndexController extends Controller
{
    public function hargaSession(Request $r){
        $r->session()->put('harga', $r->harga);
        $r->session()->put('id', $r->id);
        $r->session()->put('namapaket', $r->namapaket);
        return redirect()->route('payment');
    }
    public function index(){
        $harga = session('harga');
        $id = session('id');
        $namapaket = session('namapaket');
        return view('Payment', compact('harga', 'id', 'namapaket'));
    }
}
