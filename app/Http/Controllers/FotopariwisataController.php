<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FotopariwisataController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	//mengambil data dari table foto_pariwisata
    	$foto_pariwisata = DB::table('foto_pariwisata')->paginate(10);

    	return view('index_foto_pariwisata', ['foto_pariwisata' => $foto_pariwisata]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table foto pariwisata sesuai pencarian data
        $foto_pariwisata = DB::table('foto_pariwisata')
        ->where('foto_pariwisata','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data daerah ke view index
        return view('index_foto_pariwisata',['foto_pariwisata' => $foto_pariwisata]);
 
    }
}
