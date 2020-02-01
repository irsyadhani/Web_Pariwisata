
@extends('master')

@section('konten')
	<h3>Tambah Data Pengguna</h3>
	<br>

	<form action="/backend/pengguna/store" method="post">
		{{csrf_field()}}
		ID :
		<input type="text" name="id" required="required">
		<br>
		Nama :
		<input type="text" name="nama" required="required">
		<br>
		Password :
		<input type="text" name="password" required="required">
		<br>
		No telp :
		<input type="text" name="no_telp" required="required">
		<br>
		Email :
		<input type="text" name="email" required="required">
		<br>
		Foto :
		<input type="text" name="foto" required="required">
		<br>
		<a href="/backend/pengguna"><button type="button">Back</button></a>
		|
		<input type="submit" value="Simpan Data">
	</form>
@endsection