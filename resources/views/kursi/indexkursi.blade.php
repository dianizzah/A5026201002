@extends('layout.bahagia')

   @section('title', 'Data Kursi')
   @section('judulhalaman', 'Daftar Kursi')

   @section('sidebar')

@section('konten')
    <button> <a href="/kursi/add"> + Tambah Kursi</a> </button>

	<br/>
	<br/>

    <p style="text-align:left">Cari Data Kursi :</p>
	<form action="/kursi/search" method="GET">
		<input type="text" name="cari" placeholder="Cari data kursi .." value="{{ old('search') }}" class="form-control">
        <br/>
		<button type="submit" value="search"> Cari </button>
	</form>

    <br/>
	<br/>

    <div class="table-responsive">
	<table border="1" class="table table-hover">
		<tr>

			<th>Merk Kursi</th>
			<th>Stock Kursi</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($kursi as $k)
		<tr>

			<td>{{ $k->merkkursi }}</td>
			<td>{{ $k->stockkursi }}</td>
			<td>{{ $k->tersedia }}</td>
			<td>
                <a href="/kursi/view/{{ $k->kodekursi }}"><span class="glyphicon glyphicon-info-sign"></span></a>
				|
				<a href="/kursi/edit/{{ $k->kodekursi }}"><span class="glyphicon glyphicon-edit"></span></a>
				|
				<a href="/kursi/hapus/{{ $k->kodekursi }}"><span class="glyphicon glyphicon-trash"></span></a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$kursi->Links()}}
    </div>
@endsection
