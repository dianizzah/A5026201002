@extends('layout.bahagia')

   @section('title', 'Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('sidebar')

@section('konten')
	@foreach($pegawai as $p)

    <table border="1" class="table table-hover" style="border-color: black">
        <tr>
		<th>IDPegawai</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        </tr>
        <tr>
        <td>{{ $p->pegawai_nama }}</td>
        <td>{{ $p->pegawai_jabatan }}</td>
        <td>{{ $p->pegawai_umur }}</td>
        <td>{{ $p->pegawai_alamat }}</td>
        </tr>
    </table>

        <ul class="pager">
            <li><a href="/pegawai">Kembali</a></li>
        </ul>
	@endforeach

@endsection
