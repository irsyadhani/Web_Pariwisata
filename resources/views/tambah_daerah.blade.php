
@extends('master')

@section('konten')
	<h3>Tambah Data Daerah</h3>
	<br>

	<form action="/backend/daerah/store" method="post">
		{{csrf_field()}}
		ID :
		<input type="text" name="id" required="required">
		<br>
		Nama :
		<input type="text" name="nama" required="required">
		<br>
		<a href="/backend/daerah"><button type="button">Back</button></a>
		|
		<input type="submit" value="Simpan Data">
	</form>
@endsection