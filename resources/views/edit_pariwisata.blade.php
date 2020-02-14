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
					<h3>Edit Data Pariwisata</h3>
					<br>

					@foreach($pariwisata as $p)
						<form action="/backend/pariwisata/update" method="post">
							{{csrf_field()}}
							<input type="hidden" name="id" value="{{$p->id_pariwisata}}">
							<br>
							ID Daerah :
							<select class="form-control form-control-sm" name="id_daerah">
								<option name="id_daerah" value="{{$p->id_daerah}}">{{$p->nama_daerah}}</option>
								@foreach($daerah as $d)
								<option name="id_daerah" value="{{$d->id_daerah}}">{{$d->nama_daerah}}</option>
								@endforeach
							</select>
							<br>
							Nama Tempat :
							<input class="form-control" type="text" name="nama" value="{{$p->nama_tempat}}">
							<br>
							Alamat :
							<input type="text" class="form-control" name="alamat" value="{{$p->alamat_pariwisata}}">
							<br>
							Biaya Masuk :
							<input type="number" class="form-control" name="biaya" value="{{$p->biaya_masuk}}">
							<br>
							Deskripsi :
							<textarea rows="5" name="deskripsi" class="form-control">{{$p->deskripsi_pariwisata}}</textarea>
							<br>
							<a href="/backend/jadwal_buka" class="btn btn-secondary btn-sm">Back</a>
							
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