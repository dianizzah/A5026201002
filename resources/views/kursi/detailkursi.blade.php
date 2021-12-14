@extends('layout.bahagia')

@section('title', 'Data Kursi')
@section('judulhalaman', 'Detail Data Kursi')

@section('sidebar')

@section('konten')
    @foreach($kursi as $k)
    <table border="1" class="table table-hover">
        <tr>
        <th>Kode Kursi</th>
        <th>Merk Kursi</th>
        <th>Stock Kursi</th>
        <th>Tersedia</th>
        </tr>
        <tr>
        <td>{{ $k->kodekursi }}</td>
        <td>{{ $k->merkkursi }}</td>
        <td>{{ $k->stockkursi }}</td>
        <td>{{ $k->tersedia }}</td>
        </tr>
    </table>

        <ul class="pager">
            <li><a href="/kursi">Kembali</a></li>
        </ul>
    @endforeach
@endsection
