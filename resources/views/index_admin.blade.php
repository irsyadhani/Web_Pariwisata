
@extends('master')

@section('konten')
<h3>Data Admin</h3>

<a href="/backend/admin/tambah">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nama Admin</th>
		<th>Password</th>
		<th>Foto</th>
		<th>Opsi</th>
	</tr>
	@foreach($admin as $adm)
	<tr>
		<td>{{$adm->id_admin}}</td>
		<td>{{$adm->administrator}}</td>
		<td>{{$adm->password}}</td>
		<td>{{$adm->foto_admin}}</td>
		<td>
			<a href="/backend/admin/edit/{{$adm->id_admin}}">Edit</a>
			|
			<a href="/backend/admin/hapus/{{$adm->id_admin}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection