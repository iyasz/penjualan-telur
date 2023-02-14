<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index()
    {
        $trx = transaksi::get();
        return view('transaksi.transaksi', ['transaksi' => $trx]);
    }

    public function createview()
    {
        return view('transaksi.create');
    }

    public function create(Request $request)
    {
        $transaki = 'TRX/EGG-STORE/'.date('Ymd').random_int(10000,99999);
        $request['no_trx'] = $transaki;
        $request['tgl_trx'] = Carbon::now();
        $trxCreate = transaksi::create($request->except('_token', 'submit'));
        $trx_id = $trxCreate->id;

        return redirect('/detail-transaksi/'.$trx_id);
    }

    public function update($id, Request $request)
    {
        $trx = transaksi::find($id);
        $trx->update($request->except('_token', 'submit'));
        return redirect('/transaksi');
    }
}
