<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FotopariwisataController extends Controller
{
    public function index(){

    	//mengambil data dari table foto_pariwisata
    	$foto_pariwisata = DB::table('foto_pariwisata')->get();

    	return view('index_foto_pariwisata', ['foto_pariwisata' => $foto_pariwisata]);
    }
}
