
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
					<h3>Edit Data Admin</h3>
					<br>

					@foreach($admin as $adm)
						<form action="/backend/admin/update" method="post">
							{{csrf_field()}}
							<input type="hidden" name="id" value="{{$adm->id_admin}}">
							<br>
							Nama :
							<input type="text" name="nama" value="{{$adm->administrator}}" required="required">
							<br>
							Password :
							<input type="text" name="password" value="{{$adm->password}}" required="required">
							<br>
							Foto :
							<input type="text" name="foto" value="{{$adm->foto_admin}}" required="required">
							<br>
							<a href="/backend/admin"><button type="button">Back</button></a>
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