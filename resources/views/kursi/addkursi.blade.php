@extends('layout.bahagia')

@section('title', 'Tambah Data Kursi')
@section('judulhalaman', 'Tambah Data Kursi')

@section('sidebar')

@section('konten')
    <form action="/kursi/store" method="post">
        {{ csrf_field() }}
        <label for="merk" class="col-sm-2 control-label">Merk Kursi</label>
        <input type="text" name="merk" required="required" class="form-control">
        <br/>
        <label for="stock" class="col-sm-2 control-label">Stock Kursi</label>
        <input type="number" name="stock" required="required" class="form-control">
        <br/>
        <label for="tersedia" class="col-sm-2 control-label">Ketersediaan</label>
        <br/>
        <div class="radio form" style="text-align: left">
        <input type="radio" id="izin" name="tersedia" value="A">
        <label for="tersedia">Ada</label><br>
        <input type="radio" id="sakit" name="tersedia" value="T" checked="checked">
        <label for="tidakTersedia">Tidak Ada</label><br>
        </div>

        <ul class="pager">
            <li><a href="/kursi">Kembali</a></li>
            <li><button type="submit" value="Submit">Simpan Data</button></li>
        </ul>
    </form>
@endsection
