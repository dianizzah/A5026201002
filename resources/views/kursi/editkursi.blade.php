@extends('layout.bahagia')

@section('title', 'Edit Data Kursi')
@section('judulhalaman', 'Edit Data Kursi')

@section('sidebar')

@section('konten')
    @foreach($kursi as $k)
	<form action="/kursi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kode" value="{{ $k->kodekursi }}">
        <br/>
		<label for="merk" class="col-sm-2 control-label">Merk Kursi</label>
        <input type="text" required="required" name="merk" value="{{ $k->merkkursi }}" class="form-control"> <br/>

        <label for="stock" class="col-sm-2 control-label">Stock Kursi</label>
        <input type="number" required="required" name="stock" value="{{ $k->stockkursi }}" class="form-control"> <br/>

        <label for="tersedia" class="col-sm-2 control-label">Ketersediaan</label> <br/>
        <div class="radio form" style="text-align: left">
            <input type="radio" id="izin" name="tersedia" value="A">
            <label for="tersedia">Ada</label><br>
            <input type="radio" id="sakit" name="tersedia" value="T" checked="checked">
            <label for="tidakTersedia">Tidak Ada</label><br>
        </div>

        <ul class="pager">
            <li><a href="/kursi">Kembali</a></li>
            <li><button type="submit" value="Submit">Simpan Data</button></li>
        </ul>
	</form>
	@endforeach
@endsection
