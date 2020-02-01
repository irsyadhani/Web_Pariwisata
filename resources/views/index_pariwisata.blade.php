
@extends('master')

@section('konten')
<h3>Data Pariwisata</h3>

<a href="/backend/pariwisata/tambah">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID Pariwisata</th>
		<th>ID Daerah</th>
		<th>Nama Tempat</th>
		<th>Alamat</th>
		<th>Biaya Masuk</th>
		<th>Deskripsi</th>
		<th>Average Rating</th>
		<th>Opsi</th>
	</tr>
	@foreach($pariwisata as $pws)
	<tr>
		<td>{{$pws->id_pariwisata}}</td>
		<td>{{$pws->id_daerah}}</td>
		<td>{{$pws->nama_tempat}}</td>
		<td>{{$pws->alamat_pariwisata}}</td>
		<td>{{$pws->biaya_masuk}}</td>
		<td>{{$pws->deskripsi_pariwisata}}</td>
		<td>{{$pws->avg_rating}}</td>
		<td>
			<a href="/backend/pariwisata/edit/{{$pws->id_pariwisata}}">Edit</a>
			|
			<a href="/backend/pariwisata/hapus/{{$pws->id_pariwisata}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection