<?php

namespace App\Http\Controllers;

use App\Models\jenis_telur;
use Illuminate\Http\Request;

class jenisTelurController extends Controller
{
    public function index()
    {
        $jenis = jenis_telur::paginate(10);

        return view('jenis_telur.jenis_telur', ['jenis' => $jenis]);
    }

    public function createview()
    {
        return view('jenis_telur.create');
    }

    public function create(Request $request)
    {
        $rules = [
            'nama' => 'required',
        ];

        $validated = $request->validate($rules);
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

        $rules = [
            'nama' => 'required',
        ];

        $validated = $request->validate($rules);

        $jenis->update($request->except('_token', 'submit'));

        return redirect('/jenis-telur');
    }

    public function restoreview()
    {
        $jenis = jenis_telur::onlyTrashed()->get();
        return view('jenis_telur.softdeletes', ['jenis' => $jenis]);
    }

    public function restore($id)
    {
        $jenis = jenis_telur::withTrashed()->where('id', $id)->restore();
        return redirect('/jenis-telur');
    }

    public function detail($id)
    {
        $jenis = jenis_telur::findOrFail($id);
        return view('jenis_telur.detail', ['data' => $jenis]);
    }
}
