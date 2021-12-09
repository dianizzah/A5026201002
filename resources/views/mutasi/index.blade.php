@extends('layout.bahagia')

   @section('title', 'Data Mutasi')
   @section('judulhalaman', 'Daftar Mutasi')

   @section('sidebar')

@section('konten')

	<button> <a href="/mutasi/tambah"> + Tambah Mutasi Baru</a> </button>

	<br/>
	<br/>
    <div class="table-responsive">
    <table border="1" class="table table-hover" style="border-color: black">
		<tr>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
            <th>Waktu Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			<td>{{ $m->IDPegawai }}</td>
			<td>{{ $m->Departemen }}</td>
			<td>{{ $m->SubDepartemen }}</td>
			<td>{{ $m->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->ID }}"><span class="glyphicon glyphicon-edit"></span></a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection

