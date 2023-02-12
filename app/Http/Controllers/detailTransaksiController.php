<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailTransaksiController extends Controller
{
    public function createview()
    {
        return view('detail_trx.create');
    }
}
