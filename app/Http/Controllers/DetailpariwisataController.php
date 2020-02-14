<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DetailpariwisataController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	//mengambil data dari table detail_pariwisata
    	$detail_pariwisata = DB::table('detail_pariwisata')->select('detail_pariwisata.*', 'pariwisata.nama_tempat', 'kategori.nama_kategori')->join('pariwisata', 'pariwisata.id_pariwisata', '=', 'detail_pariwisata.id_pariwisata')->join('kategori', 'kategori.id_kategori', '=', 'detail_pariwisata.id_kategori')->paginate(10);

    	return view('index_detail_pariwisata', ['detail_pariwisata' => $detail_pariwisata]);
    }

    public function tambah(){
        $pariwisata = DB::table('pariwisata')->get();
        $kategori = DB::table('kategori')->get();

        return view('tambah_detail_pariwisata', ['pariwisata' => $pariwisata], ['kategori' => $kategori]);
    }

    public function store(Request $request){
        DB::table('detail_pariwisata')->insert([
            'id_pariwisata' => $request->id_pariwisata,
            'id_kategori' => $request->id_kategori
        ]);

        return redirect('/backend/detail_pariwisata');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table detail pariwisata sesuai pencarian data
        $detail_pariwisata = DB::table('detail_pariwisata')->select('detail_pariwisata.*', 'pariwisata.nama_tempat', 'kategori.nama_kategori')->join('pariwisata', 'pariwisata.id_pariwisata', '=', 'detail_pariwisata.id_pariwisata')->join('kategori', 'kategori.id_kategori', '=', 'detail_pariwisata.id_kategori')
        ->where('pariwisata.nama_tempat','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data detail pariwisata ke view index
        return view('index_detail_pariwisata',['detail_pariwisata' => $detail_pariwisata]);
 
    }
}
