
@extends('master')

@section('konten')
<h3>Data Pengguna</h3>

<a href="/backend/pengguna/tambah">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama pengguna</th>
		<th>Password</th>
		<th>No telp</th>
		<th>Email</th>
		<th>Foto</th>
		<th>Opsi</th>
	</tr>
	@foreach($pengguna as $p)
	<tr>
		<td>{{$p->id_pengguna}}</td>
		<td>{{$p->nama_pengguna}}</td>
		<td>{{$p->kata_sandi}}</td>
		<td>{{$p->no_telp}}</td>
		<td>{{$p->email}}</td>
		<td>{{$p->foto_pengguna}}</td>
		<td>
			<a href="/backend/pengguna/edit/{{$p->id_pengguna}}">Edit</a>
			|
			<a href="/backend/pengguna/hapus/{{$p->id_pengguna}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection