<?php

namespace App\Http\Controllers;

use App\Models\detailTransaksi;
use Carbon\Carbon;
use App\Models\transaksi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index()
    {
        $trx = transaksi::paginate($_GET['p'] ?? 10);
        return view('transaksi.transaksi', ['transaksi' => $trx]);
    }

    public function filter($filter, Request $request)
    {
        $hargaa =  response()->json($request->$filter);
        return $hargaa;
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
        $imgName = "EGG-BUKTI-PEMBAYARAN".'-'. Str::random(20).'.'.$imgExtension;
        $request->file('bukti_trx')->storeAs('bukti-trx', $imgName);

        $request['bukti_transaksi'] = $imgName;

        $trx = transaksi::find($id);
        $trx->update($request->except('_token', 'submit', 'bukti_trx'));
        return redirect('/transaksi');
    }

    public function detail($id)
    {
        $detail = detailTransaksi::with('telur.jenis_telur')->where('transaksi_id', $id)->get();

        $detail_data = json_decode($detail);
        // $telur = detailTransaksi::with('telur.jenis_telur')->get();
        // dd($detail);
        $trx = transaksi::findOrFail($id);
        
        return view('transaksi.detail', ['data' => $trx, 'detail' => $detail_data]);
    }
}
