<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index()
    {
        $trx = transaksi::get();
        return view('transaksi.transaksi', ['transaksi' => $trx]);
    }
}
