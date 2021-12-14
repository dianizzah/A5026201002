@extends('layout.bahagia')

   @section('title', 'Data Absensi')
   @section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')

	<button> <a href="/absen/add"> + Tambah Absensi</a> </button>

    <br/>
	<br/>

    <p style="text-align:left">Cari Data Absen:</p>
	<form action="/absen/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari data absen.." value="{{ old('cari') }}" class="form-control">
        <br/>
		<button type="submit" value="CARI"> Cari </button>
	</form>

	<br/>
	<br/>

    <div class="table-responsive">
	<table border="1" class="table table-hover" style="border-color: black">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}"><span class="glyphicon glyphicon-edit"></span></a>
				|
				<a href="/absen/hapus/{{ $a->ID }}"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$absen->Links()}}
</div>
    <p style="text-align: left">
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
    </p>

@endsection
