
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
					<h3>Tambah Data Kategori</h3>
					<br>

					<form action="/backend/kategori/store" method="post">
						{{csrf_field()}}
						ID :
						<input type="text" name="id" required="required">
						<br>
						Nama :
						<input type="text" name="nama" required="required">
						<br>
						<a href="/backend/kategori"><button type="button">Back</button></a>
						|
						<input type="submit" value="Simpan Data">
					</form>
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