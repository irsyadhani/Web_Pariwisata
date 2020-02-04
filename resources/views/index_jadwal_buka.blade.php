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
					<h3>Data Jadwal Buka</h3>

					<div class="form-group">
                        
                    </div>

					<a href="/backend/jadwal_buka/tambah" class="btn btn-success btn-sm">+ Tambah Data</a>

					<br>
					<br>

					<table class="table table-bordered">
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
								<a href="/backend/jadwal_buka/edit/{{$jb->id_jadwal}}" class="btn btn-warning btn-sm">Edit</a>
								
								<a href="/backend/jadwal_buka/hapus/{{$jb->id_jadwal}}" class="btn btn-danger btn-sm">Hapus</a>
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