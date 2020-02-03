
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
					<h3>Data Pengguna</h3>

					<a href="/backend/pengguna/tambah">+ Tambah Data</a>

					<br>

					<table border="1">
						<tr>
							<th>ID</th>
							<th>Nama pengguna</th>
							<th>Password</th>
							<th>No telp</th>
							<th>Email</th>
							<th>Foto</th>
							<th>Opsi</th>
						</tr>
						@foreach($pengguna as $p)
						<tr>
							<td>{{$p->id_pengguna}}</td>
							<td>{{$p->nama_pengguna}}</td>
							<td>{{$p->kata_sandi}}</td>
							<td>{{$p->no_telp}}</td>
							<td>{{$p->email}}</td>
							<td>{{$p->foto_pengguna}}</td>
							<td>
								<a href="/backend/pengguna/edit/{{$p->id_pengguna}}">Edit</a>
								|
								<a href="/backend/pengguna/hapus/{{$p->id_pengguna}}">Hapus</a>
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