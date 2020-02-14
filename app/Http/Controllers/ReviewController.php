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
    	$review = DB::table('review')->select('review.*', 'pariwisata.*', 'pengguna.*')->join('pariwisata', 'pariwisata.id_pariwisata', '=', 'review.id_pariwisata')->join('pengguna', 'pengguna.id_pengguna', '=', 'review.id_pengguna')->paginate(10);
        $pengguna = DB::table('pengguna')->get();

    	return view('index_review', ['review' => $review], ['pengguna' => $pengguna]);
    }

    public function tambah(){
        $review = DB::table('review')->get();
        $pariwisata = DB::table('pariwisata')->get();
        $pengguna = DB::table('pengguna')->get();

        return view('tambah_review', ['pariwisata' => $pariwisata], ['review' => $review], ['pengguna' => $pengguna]);
    }

    public function store(Request $request){
        DB::table('review')->insert([
            'id_review' => $request->id,
            'id_pengguna' => $request->id_pengguna,
            'id_pariwisata' => $request->id_pariwisata,
            'status' => $request->status,
            'rating' => $request->rating,
            'deskripsi_review' => $request->deskripsi
        ]);

        return redirect('/backend/review');
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
