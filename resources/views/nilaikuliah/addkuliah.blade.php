@extends('layout.bahagia')

@section('title', 'Tambah Data Nilai')
@section('judulhalaman', 'Tambah Data Nilai')

@section('sidebar')

@section('konten')
    <form action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}
        <label for="nrp" class="col-sm-2 control-label">NRP</label>
        <input type="text" name="NRP" required="required" class="form-control">
        <br/>
        <label for="nilai" class="col-sm-2 control-label">Nilai Angka</label>
        <input type="number" name="NilaiAngka" required="required" class="form-control">
        <br/>
        <label for="sks" class="col-sm-2 control-label">SKS</label>
        <br/>
        <input type="number" name="SKS" required="required" class="form-control">

        <ul class="pager">
            <li><a href="/nilaikuliah">Kembali</a></li>
            <li><button type="submit" value="Submit">Simpan Data</button></li>
        </ul>
    </form>
@endsection
