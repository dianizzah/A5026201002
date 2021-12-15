<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaikuliahController extends Controller
{
    public function index()
    {

        $nilaikuliah = DB::table('nilaikuliah')->orderBy('ID', 'asc')->paginate(5) ;; //hasil get() adalah Array of Object [object]
    	// mengirim data nilaikuliah ke view index
    	return view('nilaikuliah.indexkuliah',['nilaikuliah' => $nilaikuliah]); //teknik komunikasi/passing value antara controller dan view

    }

    public function add()
    {
        // memanggil view tambah
	    return view('nilaikuliah.addkuliah');
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah'); //tidak return view karena jadi tidak fleksibel
    }
}
