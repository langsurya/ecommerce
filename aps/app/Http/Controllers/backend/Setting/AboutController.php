<?php

namespace App\Http\Controllers\backend\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Katpel;
class AboutController extends Controller
{

    public function index()
    {
        $abouts = DB::table('about')->where('id', 1)->first();
        return view('backend.setting.about.index', compact('abouts'));
    }

    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
        // 
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // 
    }

    public function update(Request $request, $id)
    {
      DB::table('about')
            ->where('id', $id)
            ->update([
                'isi' => $request->isi,
                'email' => $request->email,
                'phone' => $request->phone,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'youtube' => $request->youtube,
                'gplus' => $request->gplus,
                'alamat' => $request->alamat,
                ]);

        return back();
    }

    public function destroy($id)
    {
        // 
    }
}
