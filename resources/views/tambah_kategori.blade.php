
@extends('master')

@section('konten')
	<h3>Tambah Data Kategori</h3>
	<br>

	<form action="/backend/kategori/store" method="post">
		{{csrf_field()}}
		ID :
		<input type="text" name="id" required="required">
		<br>
		Nama :
		<input type="text" name="nama" required="required">
		<br>
		<a href="/backend/kategori"><button type="button">Back</button></a>
		|
		<input type="submit" value="Simpan Data">
	</form>
@endsection