
@extends('master')

@section('konten')
	<h3>Edit Data Kategori</h3>
	<br>

	@foreach($kategori as $k)
		<form action="/backend/kategori/update" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$k->id_kategori}}">
			<br>
			Nama :
			<input type="text" name="nama" value="{{$k->nama_kategori}}" required="required">
			<br>
			<a href="/backend/kategori"><button type="button">Back</button></a>
			|
			<input type="submit" value="Simpan Data">
		</form>
	@endforeach
@endsection