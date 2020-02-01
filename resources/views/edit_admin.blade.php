
@extends('master')

@section('konten')
	<h3>Edit Data Admin</h3>
	<br>

	@foreach($admin as $adm)
		<form action="/backend/admin/update" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$adm->id_admin}}">
			<br>
			Nama :
			<input type="text" name="nama" value="{{$adm->administrator}}" required="required">
			<br>
			Password :
			<input type="text" name="password" value="{{$adm->password}}" required="required">
			<br>
			Foto :
			<input type="text" name="foto" value="{{$adm->foto_admin}}" required="required">
			<br>
			<a href="/backend/admin"><button type="button">Back</button></a>
			|
			<input type="submit" value="Simpan Data">
		</form>
	@endforeach
@endsection