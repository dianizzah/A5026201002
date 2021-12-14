<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KursiController extends Controller
{
    public function index()
    {

        $kursi = DB::table('kursi')->orderBy('merkkursi', 'asc')->paginate(5) ;; //hasil get() adalah Array of Object [object]
    	// mengirim data kursi ke view index
    	return view('kursi.indexkursi',['kursi' => $kursi]); //teknik komunikasi/passing value antara controller dan view

    }

    public function add()
    {
        // memanggil view tambah
	    return view('kursi.addkursi');
    }

    // method untuk insert data ke table kursi
    public function store(Request $request)
    {
        // insert data ke table kursi
        DB::table('kursi')->insert([
            'merkkursi' => $request->merk,
            'stockkursi' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman kursi
        return redirect('/kursi'); //tidak return view karena jadi tidak fleksibel
    }

    // method untuk edit data kursi
    public function edit($kode)
    {
        // mengambil data kursi berdasarkan id yang dipilih
        $kursi = DB::table('kursi')->where('kodekursi',$kode)->get();
        // passing data kursi yang didapat ke view edit.blade.php
        return view('kursi.editkursi',['kursi' => $kursi]);
    }

    // update data kursi
    public function update(Request $request)
    {
        // update data kursi
        DB::table('kursi')->where('kodekursi',$request->kode)->update([
            'merkkursi' => $request->merk,
            'stockkursi' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman kursi
        return redirect('/kursi');
    }

    // method untuk hapus data kursi
    public function delete($kode)
    {
        // menghapus data kursi berdasarkan id yang dipilih
        DB::table('kursi')->where('kodekursi',$kode)->delete();

        // alihkan halaman ke halaman kursi
        return redirect('/kursi');
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->cari;

    		// mengambil data dari table kursi sesuai pencarian data
		$kursi = DB::table('kursi')
		->where('merkkursi','like',"%".$search."%")
        ->orWhere('kodekursi','like', "%" . $search . "%")
        ->orWhere('stockkursi','like', "%" . $search . "%")
		->paginate(5);

    		// mengirim data kursi ke view index
		return view('kursi.indexkursi',['kursi' => $kursi]);
	}

    //melihat detail data kursi
    public function detail($kode)
    {
        // mengambil data kursi berdasarkan id yang dipilih
        $kursi = DB::table('kursi')->where('kodekursi',$kode)->get();
        // passing data kursi yang didapat ke view detail.blade.php
        return view('kursi.detailkursi',['kursi' => $kursi]);
    }
}
