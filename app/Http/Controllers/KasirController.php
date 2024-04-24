<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class KasirController extends Controller
{
    public function login(){
        return view('auth.login');  
    }

    public function proses(Request $request){
         $valid = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        
    
    Session::flash('status', 'failed');
    Session::flash('message', 'Login Invalid');
        return back();
    }

    public function index(Request $request) {
        $kasir = Kasir::all();
        
        return view('kasir.index',['data' => $kasir]);
    }
    
    public function tambah () {
        return view('kasir.tambah');
    }

    public function proses_tambah (Request $request) {
        $valid = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|unique:kasirs|max:255',
            'password' => 'required|max:100',
            'telepon' => 'required|max:13',
            'alamat' => 'required|max:255',
        ]);

        $k = new Kasir();
        $k->create($request->all());
        return redirect('dashboard/kasir');
    }

    public function edit($id){
        $k = Kasir::select('*')->where('id', $id)->get();
        return view ('kasir.edit',['data' => $k]);
    }

    public function proses_edit (Request $request) {
        
        $k = Kasir::where('id',$request->id)->update([
            'nama' =>$request->nama,
            'username' =>$request->username,
            'password' =>$request->password,
            'telepon' =>$request->telepon,
            'akses' =>$request->akses,
            'alamat' =>$request->alamat
        ]);
        return redirect('dashboard/kasir');
    }

    public function hapus($id) {
        $k = Kasir::where('id', $id)->delete();
        return back();
    }
}
