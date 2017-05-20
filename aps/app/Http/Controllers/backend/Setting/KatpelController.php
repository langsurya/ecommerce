<?php

namespace App\Http\Controllers\backend\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Katpel;
class KatpelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $katpel = Katpel::orderBy('id','DESC')->paginate(5);

      return view('backend.setting.katpel.index',compact('katpel'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $pelanggans = '';
        return view('backend.setting.katpel.create', ['pelanggans' => $pelanggans, 'fungsi'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'keterangan' => 'required',
        'status' => 'required',
      ]);
      Katpel::create($request->all());
      // route katpel/index = backend/katpel/index
      return redirect()->route('katpel.index')
        ->with('success','Pelanggan created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $katpel = Katpel::findOrFail($id);
      return view('backend.setting.katpel.edit', ['katpel' => $katpel, 'fungsi'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name' => 'required',
        'keterangan' => 'required',
        'status' => 'required',
      ]);
		  Katpel::find($id)->update($request->all());

      return redirect()->route('katpel.index')
        ->with('success','Kategori Pelanggan update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Katpel::find($id)->delete();
      return redirect()->route('katpel.index')
        ->with('success','Kategori deleted successfully');
    }
}
