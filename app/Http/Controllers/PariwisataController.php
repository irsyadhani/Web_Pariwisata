<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PariwisataController extends Controller
{
	 public function __construct(){
        $this->middleware('auth');
    }

    public function index(){

    	//mengambil data dari table pariwisata
    	$pariwisata = DB::table('pariwisata')->paginate(5);

    	return view('index_pariwisata', ['pariwisata' => $pariwisata]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pariwisata sesuai pencarian data
        $pariwisata = DB::table('pariwisata')
        ->where('nama_tempat','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pariwisata ke view index
        return view('index_pariwisata',['pariwisata' => $pariwisata]);
 
    }
}
