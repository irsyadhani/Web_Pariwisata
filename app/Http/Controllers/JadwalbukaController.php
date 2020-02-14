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
    	$jadwal_buka = DB::table('jadwal_buka')->select('jadwal_buka.*', 'pariwisata.*')->join('pariwisata', 'pariwisata.id_pariwisata', '=', 'jadwal_buka.id_pariwisata')->paginate(10);

    	return view('index_jadwal_buka', ['jadwal_buka' => $jadwal_buka]);
    }

    public function tambah(){
        $jadwal_buka = DB::table('jadwal_buka')->get();
        $pariwisata = DB::table('pariwisata')->get();

        return view('tambah_jadwal_buka', ['jadwal_buka' => $jadwal_buka], ['pariwisata' => $pariwisata]);
    }

    public function store(Request $request){
        DB::table('jadwal_buka')->insert([
            'id_jadwal' => $request->id,
            'id_pariwisata' => $request->id_pariwisata,
            'hari_buka' => $request->hari_buka,
            'jam_buka' => $request->jam_buka,
            'jam_tutup' => $request->jam_tutup
        ]);

        return redirect('/backend/jadwal_buka');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table jadwal buka sesuai pencarian data
        $jadwal_buka = DB::table('jadwal_buka')->select('jadwal_buka.*', 'pariwisata.*')->join('pariwisata', 'pariwisata.id_pariwisata', '=', 'jadwal_buka.id_pariwisata')
        ->where('hari_buka','like',"%".$cari."%")
        ->paginate(10);
 
            // mengirim data jadwal buka ke view index
        return view('index_jadwal_buka',['jadwal_buka' => $jadwal_buka]);
 
    }

    public function edit($id){
        //mengambil data dari table jadwal buka
        $jadwal_buka = DB::table('jadwal_buka')->select('jadwal_buka.*', 'pariwisata.*')->join('pariwisata', 'pariwisata.id_pariwisata', '=', 'jadwal_buka.id_pariwisata')->where('jadwal_buka.id_jadwal',$id)->get();
        $pariwisata = DB::table('pariwisata')->get();

        return view('edit_jadwal_buka', ['jadwal_buka' => $jadwal_buka], ['pariwisata' => $pariwisata]);
    }

    public function update(Request $request){
        DB::table('jadwal_buka')->where('id_jadwal', $request->id)->update([
            'id_jadwal'=>$request->id,
            'id_pariwisata'=>$request->id_pariwisata,
            'hari_buka'=>$request->hari_buka,
            'jam_buka'=>$request->jam_buka,
            'jam_tutup'=>$request->jam_tutup
        ]);
        return redirect('/backend/jadwal_buka');
    }

    public function hapus($id){
        //menghapus data foto pariwisata berdasarkan id yang dipilih
        DB::table('jadwal_buka')->where('id_jadwal', $id)->delete();
        //alihkan halaman ke halaman foto pariwisata
        return redirect('/backend/jadwal_buka');
    }
}
