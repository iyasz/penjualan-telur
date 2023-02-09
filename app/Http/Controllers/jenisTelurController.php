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

    public function createview()
    {
        return view('jenis_telur.create');
    }

    public function create(Request $request)
    {
        jenis_telur::create($request->except('_token', 'submit'));

        return redirect('/jenis-telur');
    }

    public function destroy($id)
    {
        $jenis = jenis_telur::find($id);

        $jenis->delete();
        return redirect('/jenis-telur');
    }

    public function updateview($id)
    {
        $jenis = jenis_telur::find($id);
        return view('jenis_telur.update', ['jenis' => $jenis]);
    }

    public function update($id, Request $request)
    {
        $jenis = jenis_telur::find($id);

        $jenis->update($request->except('_token', 'submit'));

        return redirect('/jenis-telur');
    }
}
