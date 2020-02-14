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
					<h3>Data Detail Pariwisata</h3>

                    <div class="form-group">
                        
                    </div>

                    <form action="/backend/detail_pariwisata/cari" method="GET" class="form-inline">
                        <input type="text" class="form-control" name="cari" placeholder="Cari Detail Pariwisata .." value="{{ old('cari') }}">
                        <input type="submit" class="btn btn-light ml-3" value="CARI">
                    </form>
                    <br>

					<a href="/backend/detail_pariwisata/tambah" class="btn btn-success btn-sm">+ Tambah Data</a>

					<br>
                    <br>

					<table border="1" class="table table-bordered">
						<tr>
							<th>Pariwsata</th>
							<th>Kategori</th>
						</tr>
						@foreach($detail_pariwisata as $dp)
						<tr>
							<td>{{$dp->nama_tempat}}</td>
							<td>{{$dp->nama_kategori}}</td>
							
						</tr>
						@endforeach
					</table>
                    Halaman : {{$detail_pariwisata->currentPage()}} <br>
                    Jumlah Data : {{$detail_pariwisata->total()}} <br>
                    Data Per Halaman : {{$detail_pariwisata->perPage()}} <br>
                    <br>
                    {{$detail_pariwisata->links()}}
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