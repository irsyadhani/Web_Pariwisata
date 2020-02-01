
@extends('master')

@section('konten')
<h3>Data Review</h3>

<a href="/backend/review/tambah">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID Review</th>
		<th>ID Pengguna</th>
		<th>ID Pariwisata</th>
		<th>Status</th>
		<th>Rating</th>
		<th>Deskripsi</th>
		<th>Opsi</th>
	</tr>
	@foreach($review as $r)
	<tr>
		<td>{{$r->id_review}}</td>
		<td>{{$r->id_pengguna}}</td>
		<td>{{$r->id_pariwisata}}</td>
		<td>{{$r->status}}</td>
		<td>{{$r->rating_review}}</td>
		<td>{{$r->deskripsi_review}}</td>
		<td>
			<a href="/backend/review/edit/{{$r->id_review}}">Edit</a>
			|
			<a href="/backend/review/hapus/{{$r->id_review}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection