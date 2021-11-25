<!DOCTYPE html>
<html>
<head>
	<title>Penugasan Laravel Update</title>
</head>
<body>

	<h3>Edit Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->ID }}"> <br/>
        ID Pegawai <input type="number" name="idpegawai" value="{{ $m->pegawai_id }}"> <br/>
		Departemen <input type="text" name="depart" value="{{ $m->pegawai_depart }}"> <br/>
        Sub Departemen <input type="text" name="subdepart" value="{{ $m->pegawai_subdepart }}"> <br/>
		Waktu Mulai Bertugas <input type="datetime-local" name="waktutgs" value="{{ $m->pegawai_tgl }}"> <br/>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
