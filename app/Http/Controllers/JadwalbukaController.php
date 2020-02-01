<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JadwalbukaController extends Controller
{
    public function index(){

    	//mengambil data dari table jadwal buka
    	$jadwal_buka = DB::table('jadwal_buka')->get();

    	return view('index_jadwal_buka', ['jadwal_buka' => $jadwal_buka]);
    }

    
}
