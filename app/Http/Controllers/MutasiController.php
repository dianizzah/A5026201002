<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MutasiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mutasi
    	$mutasi = DB::table('mutasi')->get();

    	// mengirim data mutasi ke view index
    	return view('mutasi.index',['mutasi' => $mutasi]);

    }
    // method untuk menampilkan view form tambah mutasi
    public function tambah()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key

        // memanggil view tambah
        return view('mutasi.tambah',  ['pegawai' => $pegawai]);

    }
    // method untuk insert data ke table mutasi
    public function store(Request $request)
    {
        // insert data ke table mutasi
        DB::table('mutasi')->insert([
            'IDPegawai' => $request->idpegawai,
            'Departemen' => $request->depart,
            'SubDepartemen' => $request->subdepart,
            'MulaiBertugas' => $request->waktutgs
        ]);
        // alihkan halaman ke halaman mutasi
        return redirect('/mutasi');

    }
    // method untuk edit data pegawai
    public function edit($ID)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('ID',$ID)->get();
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get(); //defaultnya urut Primary Key
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('mutasi.edit',['mutasi' => $mutasi, 'pegawai' => $pegawai]);

    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('mutasi')->where('ID',$request->ID)->update([
            'IDPegawai' => $request->idpegawai,
            'Departemen' => $request->depart,
            'SubDepartemen' => $request->subdepart,
            'MulaiBertugas' => $request->waktutgs
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mutasi');
    }
    // method untuk hapus data pegawai
    public function hapus($ID)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('mutasi')->where('ID',$ID)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/mutasi');
    }
}
