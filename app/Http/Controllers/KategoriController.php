<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function index(){

    	//mengambil data dari table kategori
    	$kategori = DB::table('kategori')->get();

    	return view('index_kategori', ['kategori' => $kategori]);
    }

    public function tambah(){
    	return view('tambah_kategori');
    }

    public function store(Request $request){

    	DB::table('kategori')->insert([
    		'id_kategori' => $request->id,
    		'nama_kategori' => $request->nama
    	]);

    	return redirect('/backend/kategori');
    }

    public function edit($id){

    	//mengambil data dari table kategori
    	$kategori = DB::table('kategori')->where('id_kategori',$id)->get();

    	return view('edit_kategori', ['kategori' => $kategori]);
    }

    public function update(Request $request){
    	DB::table('kategori')->where('id_kategori', $request->id)->update([
    		'id_kategori'=>$request->id,
    		'nama_kategori'=>$request->nama
    	]);
    	return redirect('/backend/kategori');
    }

    public function hapus($id){
		//menghapus data pegawai berdasarkan id yang dipilih
		DB::table('kategori')->where('id_kategori', $id)->delete();
		//alihkan halaman ke halaman pegawai
		return redirect('/backend/kategori');
	}
}
