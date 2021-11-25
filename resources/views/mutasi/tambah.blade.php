<!DOCTYPE html>
<html>
<head>
	<title>Penugasan Laravel Create</title>
</head>
<body>


	<h3>Tambah Data Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="idpegawai" required="required"> <br/>
		Departemen <input type="text" name="depart" required="required"> <br/>
        Sub Departemen <input type="text" name="subdepart" required="required"> <br/>
		Waktu Mulai Bertugas <input type="datetime-local" name="waktutgs" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
