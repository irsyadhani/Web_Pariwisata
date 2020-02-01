
@extends('master')

@section('konten')
<h3>Data Foto Pariwisata</h3>

<a href="/backend/foto_pariwisata/tambah">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID Foto</th>
		<th>ID Pariwisata</th>
		<th>Foto_pariwisata</th>
		<th>Opsi</th>
	</tr>
	@foreach($foto_pariwisata as $fp)
	<tr>
		<td>{{$fp->id_foto}}</td>
		<td>{{$fp->id_pariwisata}}</td>
		<td>{{$fp->foto_pariwisata}}</td>
		<td>
			<a href="/backend/foto_pariwisata/edit/{{$fp->id_foto}}">Edit</a>
			|
			<a href="/backend/foto_pariwisata/hapus/{{$fp->id_foto}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection