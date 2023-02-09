<?php

namespace App\Http\Controllers;

use App\Models\jenis_telur;
use Illuminate\Http\Request;

class jenisTelurController extends Controller
{
    public function index()
    {
        $jenis = jenis_telur::get();

        return view('jenis_telur.jenis_telur', ['jenis' => $jenis]);
    }
}
