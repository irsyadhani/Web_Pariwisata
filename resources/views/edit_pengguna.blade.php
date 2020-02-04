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
					<h3>Edit Data Pengguna</h3>
					<br>

					@foreach($pengguna as $p)
						<form action="/backend/pengguna/update" method="post">
							{{csrf_field()}}
							<input type="hidden" name="id" value="{{$p->id_pengguna}}">
							<br>
							Nama :
							<input type="text" class="form-control" name="nama" value="{{$p->nama_pengguna}}" required="required">
							<br>
							Password :
							<input type="text" class="form-control" name="password" value="{{$p->kata_sandi}}" required="required">
							<br>
							No telp :
							<input type="text" class="form-control" name="no_telp" value="{{$p->no_telp}}" required="required">
							<br>
							Email :
							<input type="text" class="form-control" name="email" value="{{$p->email}}" required="required">
							<br>
							Foto :
							<input type="text" class="form-control" name="foto" value="{{$p->foto_pengguna}}" required="required">
							<br>
							<a href="/backend/pengguna" class="btn btn-secondary btn-sm">Back</a>
							
							<input type="submit" class="btn btn-primary btn-sm" value="Simpan Data">
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