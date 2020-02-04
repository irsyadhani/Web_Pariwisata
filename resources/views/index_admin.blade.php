<<<<<<< HEAD

@extends('master')

@section('konten')
<h3>Data Admin</h3>

<p>Cari Data Pegawai</p>

<div class="form-group">
	
</div>

<form action="/pegawai/cari" method="GET" class="form-inline">
	<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai..." value="{{old('cari')}}">
	<input type="submit" value="CARI" class="btn btn-primary ml-3">
</form>
<br>
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
			<a href="/backend/admin/edit/{{$adm->id_admin}}" >Edit</a>
			|
			<a href="/backend/admin/hapus/{{$adm->id_admin}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

=======

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

>>>>>>> edc9f6d83123931a8c5cd63c3a7c7a180217e3c4
@endsection