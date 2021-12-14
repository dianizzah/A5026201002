@extends('layout.bahagia')

   @section('title', 'Data Mutasi')
   @section('judulhalaman', 'Daftar Mutasi')

   @section('sidebar')

@section('konten')

	<button> <a href="/mutasi/tambah"> + Tambah Mutasi Baru</a> </button>

    <br/>
	<br/>

    <p style="text-align:left">Cari Data Mutasi :</p>
	<form action="/mutasi/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari data mutasi .." value="{{ old('cari') }}" class="form-control">
        <br/>
		<button type="submit" value="CARI"> Cari </button>
	</form>

	<br/>
	<br/>

    <div class="table-responsive">
    <table border="1" class="table table-hover" style="border-color: black">
		<tr>
			{{-- <th>ID Pegawai</th> --}}
            <th>Nama Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
            <th>Waktu Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
			{{-- <td>{{ $m->IDPegawai }}</td> --}}
            <td>{{ $m->pegawai_nama }}</td>
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
    </div>

@endsection

