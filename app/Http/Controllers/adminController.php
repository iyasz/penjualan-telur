<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $admin = admin::get();

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

        $admin->update($request->except('_token', 'submit'));

        return redirect('/admin');
    }
}
