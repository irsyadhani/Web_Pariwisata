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
					<h3>Tambah Data Review</h3>
					<br>

					<form action="/backend/review/store" method="post">
						{{csrf_field()}}
						ID Review :
						<input type="text" class="form-control" name="id" required="required">
						<br>
						ID Pengguna :
						<select class="form-control form-control-sm" name="id_pengguna">
							<option>Nama Pengguna</option>
							@foreach($pengguna as $pg)
							<option value="{{$pg->id_pengguna}}"></option>
							@endforeach
						</select>
						<br>
						ID Pariwisata :
						<select class="form-control form-control-sm" name="id_pariwisata">
							<option>Nama Pariwisata</option>
							@foreach($review as $r)
							<option value="{{$r->id_pariwisata}}">{{$r->nama_tempat}}</option>
							@endforeach
						</select>
						<br>
						Status :
						<select class="form-control form-control-sm" name="Status">
							<option>Status</option>
							<option value="Tampil">Tampil</option>
							<option value="Tidak Tampil">Tidak Tampil</option>
						</select>
						<br>
						Rating :
						<input type="number" class="form-control" name="rating" required="required">
						<br>
						Deskripsi :
						<textarea name="deskripsi_review" class="form-control"></textarea>
						<br>
						<a href="/backend/review" class="btn btn-secondary btn-sm">Back</a>
						
						<input type="submit" class="btn btn-primary btn-sm" value="Simpan Data">
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