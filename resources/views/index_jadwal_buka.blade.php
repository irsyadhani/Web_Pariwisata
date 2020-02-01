
@extends('master')

@section('konten')
<h3>Data Jadwal Buka</h3>

<a href="/backend/jadwal_buka/tambah">+ Tambah Data</a>

<br>

<table border="1">
	<tr>
		<th>ID Jadwal</th>
		<th>ID Pariwisata</th>
		<th>Hari Buka</th>
		<th>Jam Buka</th>
		<th>Jam Tutup</th>
		<th>Opsi</th>
	</tr>
	@foreach($jadwal_buka as $jb)
	<tr>
		<td>{{$jb->id_jadwal}}</td>
		<td>{{$jb->id_pariwisata}}</td>
		<td>{{$jb->hari_buka}}</td>
		<td>{{$jb->jam_buka}}</td>
		<td>{{$jb->jam_tutup}}</td>
		<td>
			<a href="/backend/jadwal_buka/edit/{{$jb->id_jadwal}}">Edit</a>
			|
			<a href="/backend/jadwal_buka/hapus/{{$jb->id_jadwal}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>

@endsection