<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesawat;
use App\jdwlPesawat;
use App\bandara;

class PesawatController extends Controller
{
    public function index(){
        $pswat = jdwlPesawat::paginate(4);
        return view('admin.pesawat.index',compact('pswat'));
    }

    public function pswt(){
        $pswt = pesawat::paginate(4);
        return view('admin.pesawat.jenis.index',compact('pswt'));
    }

    public function bndr(){
        $bandara = bandara::paginate(4);
        return view('admin.pesawat.bandara.index',compact('bandara'));
    }
}
