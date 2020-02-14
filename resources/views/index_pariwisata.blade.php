@extends('layouts.app')

@section('content')
<!-- header -->
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
</style>
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
<!-- header -->
					<h3>Data Pariwisata</h3>

					<div class="form-group">
                        
                    </div>

                    <form action="/backend/pariwisata/cari" method="GET" class="form-inline">
                        <input type="text" class="form-control" name="cari" placeholder="Cari Pariwisata .." value="{{ old('cari') }}">
                        <input type="submit" class="btn btn-light ml-3" value="CARI">
                    </form>
                    <br>

					<a href="/backend/pariwisata/tambah" class="btn btn-success btn-sm">+ Tambah Data</a>

					<br>
					<br>

					<table class="table table-bordered">
						<tr>
							<th>ID Pariwisata</th>
							<th>Daerah</th>
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
							<td>{{$pws->nama_daerah}}</td>
							<td>{{$pws->nama_tempat}}</td>
							<td>{{$pws->alamat_pariwisata}}</td>
							<td>{{$pws->biaya_masuk}}</td>
							<td width="400px">{{$pws->deskripsi_pariwisata}}</td>
							<td>{{$pws->avg_rating}}</td>
							<td>
								<a href="/backend/pariwisata/edit/{{$pws->id_pariwisata}}" class="btn btn-warning btn-sm">Edit</a>
								
								<a href="/backend/pariwisata/hapus/{{$pws->id_pariwisata}}" class="btn btn-danger btn-sm">Hapus</a>
							</td>
						</tr>
						@endforeach
					</table>
					 Halaman : {{$pariwisata->currentPage()}} <br>
                    Jumlah Data : {{$pariwisata->total()}} <br>
                    Data Per Halaman : {{$pariwisata->perPage()}} <br>
                    <br>
                    {{$pariwisata->links()}}
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