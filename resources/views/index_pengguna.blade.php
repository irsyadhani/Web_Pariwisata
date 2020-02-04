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
                        <a href="/home" class="btn btn-dark btn-sm">ADMIN</a>
                        <a href="/backend/daerah" class="btn btn-dark btn-sm">DAERAH</a>
                        <a href="/backend/kategori" class="btn btn-dark btn-sm">KATEGORI</a>
                        <a href="/backend/pengguna" class="btn btn-dark btn-sm">PENGGUNA</a>
                        <a href="/backend/detail_pariwisata" class="btn btn-dark btn-sm">DETAIL PARIWISATA</a>
                        <a href="/backend/foto_pariwisata" class="btn btn-dark btn-sm">FOTO PARIWISATA</a>
                        <a href="/backend/jadwal_buka" class="btn btn-dark btn-sm">JADWAL BUKA</a>
                        <a href="/backend/pariwisata" class="btn btn-dark btn-sm">PARIWISATA</a>
                        <a href="/backend/review" class="btn btn-dark btn-sm">REVIEW</a>
                    </nav>

                    <hr>
                    <br>
<!-- header -->
					<h3>Data Pengguna</h3>

					<div class="form-group">
                        
                    </div>

					<a href="/backend/pengguna/tambah" class="btn btn-success btn-sm">+ Tambah Data</a>

					<br>
					<br>

					<table class="table table-bordered">
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
								<a href="/backend/pengguna/edit/{{$p->id_pengguna}}" class="btn btn-warning btn-sm">Edit</a>
								
								<a href="/backend/pengguna/hapus/{{$p->id_pengguna}}" class="btn btn-danger btn-sm">Hapus</a>
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