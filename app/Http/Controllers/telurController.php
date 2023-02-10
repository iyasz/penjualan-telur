<?php

namespace App\Http\Controllers;

use App\Models\jenis_telur;
use App\Models\telur;
use Illuminate\Http\Request;

class telurController extends Controller
{
    public function index()
    {
        $telur = telur::get();
        return view('telur.telur', ['telur' => $telur]);
    }

    public function createview()
    {
        $jenis = jenis_telur::get();
        return view('telur.create', ['jenis' => $jenis]);
    }

    public function create(Request $request)
    {
        telur::create($request->except('_token', 'submit'));
        return redirect('/telur');
    }

    public function destroy($id)
    {
        $telur = telur::find($id);
        $telur->delete();
        return redirect('/telur');
    }

    public function updateview($id)
    {
        $jenis = jenis_telur::get();
        $telur = telur::find($id);
        return view('telur.update', ['telur' => $telur, 'jenis' => $jenis]);
    }

    public function update($id, Request $request)
    {
        $telur = telur::find($id);
        $telur->update($request->except('_token', 'submit'));
        return redirect('/telur');
    }
}
