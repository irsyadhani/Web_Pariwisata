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

    public function tambah(){
        $foto_pariwisata = DB::table('foto_pariwisata')->get();
        $pariwisata = DB::table('pariwisata')->get();

        return view('tambah_foto_pariwisata', ['foto_pariwisata' => $foto_pariwisata], ['pariwisata' => $pariwisata]);
    }

    public function store(Request $request){

        DB::table('foto_pariwisata')->insert([
            'id_foto' => $request->id_foto,
            'id_pariwisata' => $request->id_pariwisata,
            'foto_pariwisata' => $request->foto
        ]);

        return redirect('/backend/foto_pariwisata');
    }

    public function edit($id){
        //mengambil data dari table foto pariwisata
        $foto_pariwisata = DB::table('foto_pariwisata')->select('foto_pariwisata.*', 'pariwisata.*')->join('pariwisata', 'pariwisata.id_pariwisata', '=', 'foto_pariwisata.id_pariwisata')->where('foto_pariwisata.id_foto',$id)->get();
        $pariwisata = DB::table('pariwisata')->get();

        return view('edit_foto_pariwisata', ['foto_pariwisata' => $foto_pariwisata], ['pariwisata' => $pariwisata]);
    }

    public function update(Request $request){
        DB::table('foto_pariwisata')->where('id_foto', $request->id)->update([
            'id_foto'=>$request->id,
            'id_pariwisata'=>$request->id_pariwisata,
            'foto_pariwisata'=>$request->foto
        ]);
        return redirect('/backend/foto_pariwisata');
    }

    public function hapus($id){
        //menghapus data foto pariwisata berdasarkan id yang dipilih
        DB::table('foto_pariwisata')->where('id_foto', $id)->delete();
        //alihkan halaman ke halaman foto pariwisata
        return redirect('/backend/foto_pariwisata');
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
