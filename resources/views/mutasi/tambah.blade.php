@extends('layout.bahagia')

   @section('title', 'Data Mutasi')
   @section('judulhalaman', 'Tambah Data Mutasi')

   @section('sidebar')

@section('konten')
	<form action="/mutasi/store" method="post">
		{{ csrf_field() }}

        <label for="IDPegawai" class="col-sm-2 control-label">IDPegawai</label>
        <select name="idpegawai" class="form-control">
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>

		<label for="Departemen" class="col-sm-2 control-label">Departemen</label>
        <input type="text" name="depart" required="required" class="form-control">
        <br/>

        <label for="Departemen" class="col-sm-2 control-label">Sub Departemen</label>
        <input type="text" name="subdepart" required="required" class="form-control"> <br/>

        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal Mulai Bertugas</label>
            <div class='form-control input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="waktutgs" required="required" />
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
@endsection
