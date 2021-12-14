
   @extends('layout.bahagia')

   @section('title', 'Data Absen')
   @section('judulhalaman', 'Tambah Data Absen')

   @section('konten')

    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        <label for="IDPegawai" class="col-sm-2 control-label">IDPegawai</label>
        <select name="idpegawai" class="form-control">
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>

        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class='form-control input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
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
        <input type="radio" id="izin" name="status" value="I">
        <label for="izin">Izin</label><br>
        <input type="radio" id="sakit" name="status" value="S" checked="checked">
        <label for="sakit">Sakit</label><br>
        <input type="radio" id="alpha" name="status" value="A">
        <label for="alpha">Alpha</label>
        </div>

        <ul class="pager">
            <li><a href="/absen">Kembali</a></li>
            <li><button type="submit" value="Submit">Simpan Data</button></li>
        </ul>
    </form>
@endsection
