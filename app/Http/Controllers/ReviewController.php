<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	//mengambil data dari table review
    	$review = DB::table('review')->paginate(10);

    	return view('index_review', ['review' => $review]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table review sesuai pencarian data
        $review = DB::table('review')
        ->where('deskripsi_review','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data review ke view index
        return view('index_review',['review' => $review]);
 
    }
}
