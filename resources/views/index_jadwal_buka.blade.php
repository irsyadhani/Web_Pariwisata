
@extends('layouts.app')

@section('content')
<!-- header -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <nav>
                        <a href="/home">ADMIN</a>
                        |
                        <a href="/backend/daerah">DAERAH</a>
                        |
                        <a href="/backend/kategori">KATEGORI</a>
                        |
                        <a href="/backend/pengguna">PENGGUNA</a>
                        |
                        <a href="/backend/detail_pariwisata">DETAIL PARIWISATA</a>
                        |
                        <a href="/backend/foto_pariwisata">FOTO PARIWISATA</a>
                        |
                        <a href="/backend/jadwal_buka">JADWAL BUKA</a>
                        |
                        <a href="/backend/pariwisata">PARIWISATA</a>
                        |
                        <a href="/backend/review">REVIEW</a>
                    </nav>

                    <hr>
                    <br>
<!-- header -->
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
<!-- footer -->
					<br>
                    <hr>
                    <footer><p>&copy; WISATA PELESIR 2020</p></footer>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer -->
@endsection