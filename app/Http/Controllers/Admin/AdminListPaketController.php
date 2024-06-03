<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminListPaketController extends Controller
{
    private function limitWords($text, $wordLimit) {
        $words = explode(' ', $text);
        if (count($words) > $wordLimit) {
            return implode(' ', array_slice($words, 0, $wordLimit)) . '...';
        }
        return $text;
    }
    public function index(){
        $data = DB::table('paket')->get();
        $data->transform(function ($item) {
            $item->deskripsi = $this->limitWords($item->deskripsi, 15);
            return $item;
        });
        return view('Admin/AdminListPaket', compact('data'));
    }
}
