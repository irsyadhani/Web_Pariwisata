@extends('layouts.app')

@section('content')
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
</style>
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
					<h3>Data Review</h3>

					<div class="form-group">
                        
                    </div>
					
					<a href="/backend/review/tambah" class="btn btn-success btn-sm">+ Tambah Data</a>

					<br>
					<br>

					<table class="table table-bordered">
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
								<a href="/backend/review/edit/{{$r->id_review}}" class="btn btn-warning btn-sm">Edit</a>
								
								<a href="/backend/review/hapus/{{$r->id_review}}" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
						@endforeach
					</table>
					Halaman : {{$review->currentPage()}} <br>
                    Jumlah Data : {{$review->total()}} <br>
                    Data Per Halaman : {{$review->perPage()}} <br>
                    <br>
                    {{$review->links()}}
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