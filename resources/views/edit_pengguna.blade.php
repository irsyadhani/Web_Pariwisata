
@extends('master')

@section('konten')
	<h3>Edit Data Pengguna</h3>
	<br>

	@foreach($pengguna as $p)
		<form action="/backend/pengguna/update" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$p->id_pengguna}}">
			<br>
			Nama :
			<input type="text" name="nama" value="{{$p->nama_pengguna}}" required="required">
			<br>
			Password :
			<input type="text" name="password" value="{{$p->kata_sandi}}" required="required">
			<br>
			No telp :
			<input type="text" name="no_telp" value="{{$p->no_telp}}" required="required">
			<br>
			Email :
			<input type="text" name="email" value="{{$p->email}}" required="required">
			<br>
			Foto :
			<input type="text" name="foto" value="{{$p->foto_pengguna}}" required="required">
			<br>
			<a href="/backend/pengguna"><button type="button">Back</button></a>
			|
			<input type="submit" value="Simpan Data">
		</form>
	@endforeach
@endsection