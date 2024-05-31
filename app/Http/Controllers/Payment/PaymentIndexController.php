<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentIndexController extends Controller
{
    public function index(){
        return view('Payment');
    }
}
