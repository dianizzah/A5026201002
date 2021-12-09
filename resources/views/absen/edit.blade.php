
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')



   @section('konten')

{{-- <h3>{{ $judul }}</h3> --}}
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}

        <div class="form-group">
		<input type="hidden" class="form-control" name="id" value="{{ $a->ID }}">
        <label for="IDPegawai" class="col-sm-2 control-label">IDPegawai</label>
        <select name="idpegawai" class="form-control">
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        </div>

        <br>

        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal</label>
            <div class='form-control input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
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


        <label for="Status" class="col-sm-2 control-label">Status</label>
        <br/>
        <div class="radio form" style="text-align: left">
        <input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
        <label for="html">Izin</label><br>
        <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
        <label for="css">Sakit</label><br>
        <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
        <label for="javascript">Alpha</label>
        </div>

        <br/>
        <ul class="pager">
            <li><a href="/absen">Kembali</a></li>
            <li><button type="submit" value="Submit">Simpan Data</button></li>
        </ul>
	</form>
	@endforeach

   @endsection
