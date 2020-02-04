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

    
}
