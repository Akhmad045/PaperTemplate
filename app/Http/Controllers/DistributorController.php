<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index (Request $request) {
        $dis = Distributor::all();
        return view('distributor.index',['data'=> $dis]);
    }

    public function tambah () {
        return view('distributor.tambah');
    }

    public function proses_tambah (Request $request) {
        $valid = $request->validate([
            'nama_distributor' => 'required|max:255',
            'telepon' => 'required|max:13',
            'alamat' => 'required|max:255',
        ]);
        $d = new Distributor();
        $d->create($request->all());
        return redirect('dashboard/distributor');

    }
}
