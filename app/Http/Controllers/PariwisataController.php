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
    	$pariwisata = DB::table('pariwisata')->select('pariwisata.*', 'daerah.*')->join('daerah', 'pariwisata.id_daerah', '=', 'daerah.id_daerah')->paginate(5);

    	return view('index_pariwisata', ['pariwisata' => $pariwisata]);
    }

    public function tambah(){
        $daerah = DB::table('daerah')->get();
        $pariwisata = DB::table('pariwisata')->get();

        return view('tambah_pariwisata', ['daerah' => $daerah], ['pariwisata' => $pariwisata]);
    }

    public function store(Request $request){
        DB::table('pariwisata')->insert([
            'id_pariwisata' => $request->id,
            'id_daerah' => $request->id_daerah,
            'nama_tempat' => $request->nama,
            'alamat_pariwisata' => $request->alamat,
            'biaya_masuk' => $request->biaya,
            'deskripsi_pariwisata' => $request->deskripsi
        ]);

        return redirect('/backend/pariwisata');
    }

    public function edit($id){
        //mengambil data dari table pariwisata
        $pariwisata = DB::table('pariwisata')->select('daerah.*', 'pariwisata.*')->join('daerah', 'daerah.id_daerah', '=', 'pariwisata.id_daerah')->where('pariwisata.id_pariwisata',$id)->get();
        $daerah = DB::table('daerah')->get();

        return view('edit_pariwisata', ['daerah' => $daerah], ['pariwisata' => $pariwisata]);
    }

    public function update(Request $request){
        DB::table('pariwisata')->where('id_pariwisata', $request->id)->update([
            'id_pariwisata' => $request->id,
            'id_daerah' => $request->id_daerah,
            'nama_tempat' => $request->nama,
            'alamat_pariwisata' => $request->alamat,
            'biaya_masuk' => $request->biaya,
            'deskripsi_pariwisata' => $request->deskripsi
        ]);
        return redirect('/backend/pariwisata');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table pariwisata sesuai pencarian data
        $pariwisata = DB::table('pariwisata')->select('pariwisata.*', 'daerah.*')->join('daerah', 'daerah.id_daerah', '=', 'pariwisata.id_daerah')
        ->where('nama_tempat','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pariwisata ke view index
        return view('index_pariwisata',['pariwisata' => $pariwisata]);
 
    }

    public function hapus($id){
        //menghapus data pariwisata berdasarkan id yang dipilih
        DB::table('pariwisata')->where('id_pariwisata', $id)->delete();
        //alihkan halaman ke halaman pariwisata
        return redirect('/backend/pariwisata');
    }
}
