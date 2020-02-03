<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	//mengambil data dari table pengguna
    	$pengguna = DB::table('pengguna')->get();

    	return view('index_pengguna', ['pengguna' => $pengguna]);
    }

    public function tambah(){
    	return view('tambah_pengguna');
    }

    public function store(Request $request){

    	DB::table('pengguna')->insert([
    		'id_pengguna' => $request->id,
    		'nama_pengguna' => $request->nama,
            'kata_sandi' => $request->password,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
    		'foto_pengguna' => $request->foto
    	]);

    	return redirect('/backend/pengguna');
    }

    public function edit($id){

    	//mengambil data dari table pengguna
    	$pengguna = DB::table('pengguna')->where('id_pengguna',$id)->get();

    	return view('edit_pengguna', ['pengguna' => $pengguna]);
    }

    public function update(Request $request){
    	DB::table('pengguna')->where('id_pengguna', $request->id)->update([
    		'id_pengguna'=>$request->id,
    		'nama_pengguna' => $request->nama,
            'kata_sandi' => $request->password,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
    		'foto_pengguna'=>$request->foto
    	]);
    	return redirect('/backend/pengguna');
    }

    public function hapus($id){
		//menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pengguna')->where('id_pengguna', $id)->delete();
		//alihkan halaman ke halaman pegawai
		return redirect('/backend/pengguna');
	}
}
