<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    	//mengambil data dari table admin
    	$admin = DB::table('admin')->get();
    	
        return view('home', ['admin' => $admin]);
    }

    public function tambah(){
    	return view('tambah_admin');
    }

    public function store(Request $request){

    	DB::table('admin')->insert([
    		'id_admin' => $request->id,
    		'administrator' => $request->nama,
    		'password' => $request->password,
    		'foto_admin' => $request->foto
    	]);

    	return redirect('/home');
    }

    public function edit($id){

    	//mengambil data dari table admin
    	$admin = DB::table('admin')->where('id_admin',$id)->get();

    	return view('edit_admin', ['admin' => $admin]);
    }

    public function update(Request $request){
    	DB::table('admin')->where('id_admin', $request->id)->update([
    		'id_admin'=>$request->id,
    		'administrator'=>$request->nama,
    		'password'=>$request->password,
    		'foto_admin'=>$request->foto
    	]);
    	return redirect('/home');
    }

    public function hapus($id){
		//menghapus data pegawai berdasarkan id yang dipilih
		DB::table('admin')->where('id_admin', $id)->delete();
		//alihkan halaman ke halaman pegawai
		return redirect('/home');
	}
}
