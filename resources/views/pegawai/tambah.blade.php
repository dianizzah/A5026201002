@extends('layout.bahagia')

   @section('title', 'Data Pegawai')
   @section('judulhalaman', 'Tambah data Pegawai')

   @section('sidebar')

@section('konten')
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		<label for="Nama" class="col-sm-2 control-label">Nama</label>
        <input type="text" name="nama" required="required" class="form-control">
        <br/>
		<label for="Jabatan" class="col-sm-2 control-label">Jabatan</label>
        <input type="text" name="jabatan" required="required" class="form-control">
        <br/>
		<label for="Umut" class="col-sm-2 control-label">Umur</label>
        <input type="number" name="umur" required="required" class="form-control">
        <br/>
		<label for="Alamat" class="col-sm-2 control-label">Alamat</label>
        <textarea name="alamat" required="required" class="form-control"></textarea>
        <br/>

        <ul class="pager">
            <li><a href="/pegawai">Kembali</a></li>
            <li><button type="submit" value="Submit">Simpan Data</button></li>
        </ul>
	</form>
@endsection
