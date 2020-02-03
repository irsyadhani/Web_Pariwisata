
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
					<h3>Data Foto Pariwisata</h3>

					<a href="/backend/foto_pariwisata/tambah">+ Tambah Data</a>

					<br>

					<table border="1">
						<tr>
							<th>ID Foto</th>
							<th>ID Pariwisata</th>
							<th>Foto_pariwisata</th>
							<th>Opsi</th>
						</tr>
						@foreach($foto_pariwisata as $fp)
						<tr>
							<td>{{$fp->id_foto}}</td>
							<td>{{$fp->id_pariwisata}}</td>
							<td>{{$fp->foto_pariwisata}}</td>
							<td>
								<a href="/backend/foto_pariwisata/edit/{{$fp->id_foto}}">Edit</a>
								|
								<a href="/backend/foto_pariwisata/hapus/{{$fp->id_foto}}">Hapus</a>
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