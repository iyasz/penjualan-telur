<?php

namespace App\Http\Controllers;

use App\Models\detailTransaksi;
use App\Models\jenis_telur;
use App\Models\telur;
use App\Models\transaksi;
use Illuminate\Http\Request;

class detailTransaksiController extends Controller
{
    public function createview($id)
    {
        $jenis = telur::with('jenis_telur')->get();
        // $trx_id = transaksi::all($id);
        $trx_id = transaksi::with('detail')->get()->find($id);
        $detail_trx = detailTransaksi::with('telur.jenis_telur')->get()->where('transaksi_id', $id);
        $transaksi_id = transaksi::find($id);
        return view('detail_trx.create',['trx' => $trx_id,
                                         'jenis' => $jenis,
                                         'detail' => $detail_trx,
                                         'transaksi' => $transaksi_id]);
    }

    public function create($id, Request $request)
    {
        $request['transaksi_id'] = $id;
        $telur = telur::find($request->telur_id);
        
        $telurCalc = $telur['stok'] - $request->jumlah;
        $telur->update([
            'stok' => $telurCalc
        ]);
        
        $create = detailTransaksi::create($request->except('_token', 'submit'));

        return redirect('/detail-transaksi/'.$id);
    }

    

    public function SatuanHarga(Request $request)
    {
        $data = telur::select('harga')->where('id', $request->id)->firstOrFail();
        $hargaa =  response()->json($data);
        return $hargaa;
    }

    public function destroy($id, $trx)
    {
        $detail = detailTransaksi::find($id);
        $telur = telur::find($detail['telur_id']);
        
        $telurCalc = $telur['stok'] + $detail['jumlah'];
        $telur->update([
            'stok' => $telurCalc
        ]);

        $detail->delete();
        return redirect('/detail-transaksi/'.$trx);
    }

}
