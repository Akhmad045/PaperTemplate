<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
    
}
