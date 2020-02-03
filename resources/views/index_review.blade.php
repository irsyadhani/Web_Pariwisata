
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