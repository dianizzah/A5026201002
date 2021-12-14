@extends('layout.bahagia')

   @section('title', 'Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('sidebar')

@section('konten')
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <br/>
		<label for="IDPegawai" class="col-sm-2 control-label">Nama Pegawai</label>
        <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control"> <br/>

        <label for="Jabatan" class="col-sm-2 control-label">Jabatan</label>
        <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control"> <br/>

        <label for="Umut" class="col-sm-2 control-label">Umur</label>
        <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control"> <br/>

        <label for="Alamat" class="col-sm-2 control-label">Alamat</label>
        <textarea required="required" name="alamat" class="form-control">{{ $p->pegawai_alamat }}</textarea> <br/>

        <ul class="pager">
            <li><a href="/pegawai">Kembali</a></li>
            <li><button type="submit" value="Submit">Simpan Data</button></li>
        </ul>
	</form>
	@endforeach

@endsection
