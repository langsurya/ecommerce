<?php

namespace App\Http\Controllers\backend\Pelanggan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
// memanggil query builder
// use Illuminate\Support\Facades\DB;
use DB;
use App\Models\Users;
use App\Pelanggan;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
      // $pelanggans = Pelanggan::orderBy('id','DESC')->paginate(5);
      $pelanggans = Users::orderBy('name','ASC')->get();
      return view('backend.pelanggan.index',compact('pelanggans'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {
      // menampilkan data id terakhir dengan query builder
      $this->data['pelanggans'] = DB::table('users')
                ->latest('id')
                ->first();
                // dd ($pelanggans);
      return view('backend/pelanggan/create', $this->data, ['fungsi'=>'create']);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'phone' => 'required',
        'username' => 'required|unique:users',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required',
      ]);
      Users::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
        ]);
      return redirect()->route('pelanggan.index')
        ->with('success','Pelanggan created successfully');
    }

    public function show()
    {

    }

    public function edit($id)
    {
      $pelanggans = Users::findOrFail($id);
      // dd($pelanggans);
      // view berfungsi untuk melihat/membuka file edit.blade.php di dalam folder pelanggan
      //
      return view('backend.pelanggan.edit', ['pelanggans' => $pelanggans, 'fungsi'=>'edit']);
    }

    public function update(Request $request, $id)
    {
      if ($request->password == '') {
        $user = Users::findOrFail($id);
        $value = $user->password;

        if ($request->username==$user->username) {
          $val = 'required';
        }elseif($request->username!=$user->username){
          $val = 'required|unique:users';
        }

        if ($request->email==$user->email) {
          $val1 = 'required';
          $email = $user->email;
        }elseif($request->email!=$user->email){
          $val1 = 'required|email|max:255|unique:users';
        }
      }elseif(isset($request->password)){
        $value = bcrypt($request->password);
        
        $user = Users::findOrFail($id);
        if ($request->username==$user->username) {
          $val = 'required';
        }elseif($request->username!=$user->username){
          $val = 'required|unique:users';
        }

        if ($request->email==$user->email) {
          $val1 = 'required';
          $email = $user->email;
        }elseif($request->email!=$user->email){
          $val1 = 'required|email|max:255|unique:users';
        }
      }
      $this->validate($request, [
        'name' => 'required',
        'username' => $val,
        'email' => $val1,
      ]);

		  Users::find($id)->update([
          'name' => $request->name,
          'phone' => $request->phone,
          'username' => $request->username,
          'email' => $request->email,
          'password' => $value,
          'alamat' => $request->alamat,
        ]);

      return redirect()->route('pelanggan.index')
        ->with('success','Pelanggan created successfully');
    }

    public function destroy($id)
    {
      Users::find($id)->delete();
      return redirect()->route('pelanggan.index')
        ->with('success','Pelanggan deleted successfully');
    }

}
