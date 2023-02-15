<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\transaksi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index()
    {
        $trx = transaksi::paginate(3);
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
        $imgExtension = $request->file('bukti_trx')->getClientOriginalExtension();
        $imgName = "EGG-BUKTI-PEMBAYARAN".'-'. Str::random(20).$imgExtension;
        $request->file('bukti_trx')->storeAs('bukti-trx', $imgName);

        $request['bukti_transaksi'] = $imgName;

        $trx = transaksi::find($id);
        $trx->update($request->except('_token', 'submit', 'bukti_trx'));
        return redirect('/transaksi');
    }
}
