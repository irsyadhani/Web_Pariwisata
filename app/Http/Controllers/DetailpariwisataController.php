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
    	$detail_pariwisata = DB::table('detail_pariwisata')->get();

    	return view('index_detail_pariwisata', ['detail_pariwisata' => $detail_pariwisata]);
    }
}
