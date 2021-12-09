@extends('layout.bahagia')

   @section('title', 'Data Pegawai')
   @section('judulhalaman', 'Daftar Pegawai')

   @section('sidebar')

@section('konten')

	<button><a href="/pegawai/tambah"> + Tambah Pegawai Baru</a></button>

	<br/>
	<br/>

	<div class="table-responsive">
    <table border="1" class="table table-hover" style="border-color: black">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}"><span class="glyphicon glyphicon-edit"></span></a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection

