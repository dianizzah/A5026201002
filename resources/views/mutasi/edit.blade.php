@extends('layout.bahagia')

   @section('title', 'Data Mutasi')
   @section('judulhalaman', 'Edit Data Mutasi')

   @section('sidebar')

@section('konten')

	@foreach($mutasi as $m)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{ $m->ID }}">
            <label for="IDPegawai" class="col-sm-2 control-label">IDPegawai</label>
            <select name="idpegawai" class="form-control">
                @foreach($pegawai as $p)
                 <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $m->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                @endforeach
            </select>
            </div>

            <label for="Departemen" class="col-sm-2 control-label">Departemen</label>
            <input type="text" name="depart" value="{{ $m->Departemen }}" class="form-control"> <br/>

            <label for="Departemen" class="col-sm-2 control-label">Sub Departemen</label>
            <input type="text" name="subdepart" value="{{ $m->SubDepartemen }}" class="form-control"> <br/>

        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Waktu Mulai Bertugas </label>
            <div class='form-control input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="waktutgs" value="{{ $m->MulaiBertugas }}" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <script type="text/javascript">
            $(function() {
                $('#dtpickerdemo').datetimepicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    showTodayButton: false,
                    locale : 'id',
                    "defaultDate": new Date(),
                });
            });
        </script>

        <ul class="pager">
            <li><a href="/mutasi">Kembali</a></li>
            <li><button type="submit" value="Submit">Simpan Data</button></li>
        </ul>
	</form>
	@endforeach

@endsection
