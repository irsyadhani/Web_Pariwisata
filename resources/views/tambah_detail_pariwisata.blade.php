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
                    <h3>Tambah Data Detail Pariwisata</h3>
                    <br>

                    <form action="/backend/detail_pariwisata/store" method="post">
                        {{csrf_field()}}
                        ID Pariwisata :
                        <select class="form-control form-control-sm" name="id_pariwisata">
                            <option>Nama Pariwisata</option>
                            @foreach($pariwisata as $p)
                            <option value="{{$p->id_pariwisata}}">{{$p->nama_tempat}}</option>
                            @endforeach
                        </select>
                        ID Kategori :
                        <select class="form-control form-control-sm" name="id_kategori">
                            <option>Nama Kategori</option>
                            @foreach($kategori as $k)
                            <option value="{{$k->id_kategori}}">{{$k->nama_kategori}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        <br>
                        <a href="/backend/detail_pariwisata" class="btn btn-secondary btn-sm">Back</a>
                        
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