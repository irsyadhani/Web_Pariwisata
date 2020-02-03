
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
					<h3>Data Daerah</h3>

					<a href="/backend/daerah/tambah">+ Tambah Data</a>

					<br>

					<table border="1">
						<tr>
							<th>ID</th>
							<th>Nama daerah</th>
							<th>Opsi</th>
						</tr>
						@foreach($daerah as $d)
						<tr>
							<td>{{$d->id_daerah}}</td>
							<td>{{$d->nama_daerah}}</td>
							<td>
								<a href="/backend/daerah/edit/{{$d->id_daerah}}">Edit</a>
								|
								<a href="/backend/daerah/hapus/{{$d->id_daerah}}">Hapus</a>
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