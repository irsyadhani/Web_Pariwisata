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
    	$detail_pariwisata = DB::table('detail_pariwisata')->paginate(10);

    	return view('index_detail_pariwisata', ['detail_pariwisata' => $detail_pariwisata]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table detail pariwisata sesuai pencarian data
        $detail_pariwisata = DB::table('detail_pariwisata')
        ->where('id_pariwisata','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data detail pariwisata ke view index
        return view('index_detail_pariwisata',['detail_pariwisata' => $detail_pariwisata]);
 
    }
}
