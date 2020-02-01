
@extends('master')

@section('konten')
<h3>Data Kategori</h3>

<a href="/backend/kategori/tambah">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama kategori</th>
		<th>Opsi</th>
	</tr>
	@foreach($kategori as $d)
	<tr>
		<td>{{$d->id_kategori}}</td>
		<td>{{$d->nama_kategori}}</td>
		<td>
			<a href="/backend/kategori/edit/{{$d->id_kategori}}">Edit</a>
			|
			<a href="/backend/kategori/hapus/{{$d->id_kategori}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection