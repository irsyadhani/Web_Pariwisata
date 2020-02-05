<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JadwalbukaController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	//mengambil data dari table jadwal buka
    	$jadwal_buka = DB::table('jadwal_buka')->paginate(10);

    	return view('index_jadwal_buka', ['jadwal_buka' => $jadwal_buka]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table jadwal buka sesuai pencarian data
        $jadwal_buka = DB::table('jadwal_buka')
        ->where('hari_buka','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data jadwal buka ke view index
        return view('index_jadwal_buka',['jadwal_buka' => $jadwal_buka]);
 
    }
}
