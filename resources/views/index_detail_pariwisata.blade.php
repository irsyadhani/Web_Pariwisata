
@extends('master')

@section('konten')
<h3>Data Detail Pariwisata</h3>

<a href="/backend/detail_pariwisata">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID Pariwsata</th>
		<th>ID Kategori</th>
	</tr>
	@foreach($detail_pariwisata as $dp)
	<tr>
		<td>{{$dp->id_pariwisata}}</td>
		<td>{{$dp->id_kategori}}</td>
		
	</tr>
	@endforeach
</table>

@endsection