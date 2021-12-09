@extends('layout.bahagia')

   @section('title', 'Data Absensi')
   @section('judulhalaman', 'Daftar Absensi Pegawai')

@section('konten')

	<button> <a href="/absen/add"> + Tambah Absensi</a> </button>

	<br/>
	<br/>

    <div class="table-responsive">
	<table border="1" class="table table-hover" style="border-color: black">
		<tr>

			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->IDPegawai }}</td>
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
</div>
    <p style="text-align: left">
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
    </p>

</body>
</html>
@endsection
