
@extends('master')

@section('konten')
<h3>Data Daerah</h3>

<a href="/backend/daerah/tambah">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama daerah</th>
		<th>Opsi</th>
	</tr>
	@foreach($daerah as $d)
	<tr>
		<td>{{$d->id_daerah}}</td>
		<td>{{$d->nama_daerah}}</td>
		<td>
			<a href="/backend/daerah/edit/{{$d->id_daerah}}">Edit</a>
			|
			<a href="/backend/daerah/hapus/{{$d->id_daerah}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection