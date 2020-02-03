
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
					<h3>Edit Data Kategori</h3>
					<br>

					@foreach($kategori as $k)
						<form action="/backend/kategori/update" method="post">
							{{csrf_field()}}
							<input type="hidden" name="id" value="{{$k->id_kategori}}">
							<br>
							Nama :
							<input type="text" name="nama" value="{{$k->nama_kategori}}" required="required">
							<br>
							<a href="/backend/kategori"><button type="button">Back</button></a>
							|
							<input type="submit" value="Simpan Data">
						</form>
					@endforeach
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