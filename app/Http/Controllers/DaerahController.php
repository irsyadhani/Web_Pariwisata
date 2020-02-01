<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DaerahController extends Controller
{
    public function index(){

    	//mengambil data dari table daerah
    	$daerah = DB::table('daerah')->get();

    	return view('index_daerah', ['daerah' => $daerah]);
    }

    public function tambah(){
    	return view('tambah_daerah');
    }

    public function store(Request $request){

    	DB::table('daerah')->insert([
    		'id_daerah' => $request->id,
    		'nama_daerah' => $request->nama
    	]);

    	return redirect('/backend/daerah');
    }

    public function edit($id){

    	//mengambil data dari table daerah
    	$daerah = DB::table('daerah')->where('id_daerah',$id)->get();

    	return view('edit_daerah', ['daerah' => $daerah]);
    }

    public function update(Request $request){
    	DB::table('daerah')->where('id_daerah', $request->id)->update([
    		'id_daerah'=>$request->id,
    		'nama_daerah'=>$request->nama
    	]);
    	return redirect('/backend/daerah');
    }

    public function hapus($id){
		//menghapus data pegawai berdasarkan id yang dipilih
		DB::table('daerah')->where('id_daerah', $id)->delete();
		//alihkan halaman ke halaman pegawai
		return redirect('/backend/daerah');
	}
}
