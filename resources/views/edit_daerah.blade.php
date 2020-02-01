
@extends('master')

@section('konten')
	<h3>Edit Data Daerah</h3>
	<br>

	@foreach($daerah as $d)
		<form action="/backend/daerah/update" method="post">
			{{csrf_field()}}
			<input type="hidden" name="id" value="{{$d->id_daerah}}">
			<br>
			Nama :
			<input type="text" name="nama" value="{{$d->nama_daerah}}" required="required">
			<br>
			<a href="/backend/daerah"><button type="button">Back</button></a>
			|
			<input type="submit" value="Simpan Data">
		</form>
	@endforeach
@endsection