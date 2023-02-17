<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $admin = admin::paginate(10);

        return view('admin.admin', ['dataAdmin' => $admin]);
    }

    public function createview()
    {
        return view('admin.create');
    }

    public function create(Request $request)
    {

        $tokenRandom = Str::random(7) .'-'.date('Ymd'). Str::random(5) .'-'. Str::random(12).'-'.Str::random(5);

        $request['token'] = $tokenRandom;

        $rules = [
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];

        $validated = $request->validate($rules);
        
        admin::create($request->except('_token', 'submit'));

        return redirect('/admin');
    }

    public function updateview($id)
    {

        $admin = admin::find($id);
        return view('admin.update', ['admin' => $admin]);
    }

    public function destroy($id)
    {
        $admin = admin::find($id);

        $admin->delete();

        return redirect(('/admin'));
    }
    
    public function update($id, Request $request)
    {
        $admin = admin::find($id);

        $rules = [
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];

        $validated = $request->validate($rules);

        $admin->update($request->except('_token', 'submit'));

        return redirect('/admin');
    }

    public function detail($id)
    {
        $admin = admin::findOrFail($id);
        return view('admin.detail', ['data' => $admin]);
    }
}
