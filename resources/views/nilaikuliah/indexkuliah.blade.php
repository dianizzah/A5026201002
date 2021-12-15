@extends('layout.bahagia')

   @section('title', 'Data Nilai')
   @section('judulhalaman', 'Daftar Nilai Kuliah')

   @section('sidebar')

@section('konten')
    <button> <a href="/nilaikuliah/add"> + Tambah Data Nilai</a> </button>

	<br/>
	<br/>

    <div class="table-responsive">
	<table border="1" class="table table-hover">
		<tr>

			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>

			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
            <td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
			<td>
            @if (($n->NilaiAngka) <= 40)
            D
            @elseif ((($n->NilaiAngka) >= 41) and (($n->NilaiAngka) <= 60))
            C
            @elseif ((($n->NilaiAngka) >= 61) and (($n->NilaiAngka) <= 80))
            B
            @else
            A
            @endif
            </td>
            <td>{{ $n->SKS * $n->NilaiAngka }}</td>
		</tr>
		@endforeach
	</table>
    {{$nilaikuliah->Links()}}
    </div>
    <p style="text-align: left"> Konversi dari nilai Angka ke Huruf adalah : <br/>
        A : => 81 <br/>
        B : 61 <= NA <= 80 <br/>
        C : 41 <= NA <= 60 <br/>
        D : <= 40
    </p>
@endsection
