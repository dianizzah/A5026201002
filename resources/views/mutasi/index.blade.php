<!DOCTYPE html>
<html>
<head>
	<title>Penugasan Laravel CRUD</title>
</head>
<body>

	<h3>Data Mutasi Pegawai</h3>

	<a href="/mutasi/tambah"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
            <th>Waktu Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $m)
		<tr>
            <td>{{ $m->ID }}</td>
			<td>{{ $m->pegawai_id }}</td>
			<td>{{ $m->pegawai_depart }}</td>
			<td>{{ $m->pegawai_subdepart }}</td>
			<td>{{ $m->pegawai_tgl }}</td>
			<td>
				<a href="/mutasi/edit/{{ $m->ID }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $m->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
