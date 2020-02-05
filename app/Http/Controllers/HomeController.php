<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //mengambil data dari table admin
        $admin = DB::table('admin')->paginate(10);

        return view('home', ['admin' => $admin]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
 
            // mengambil data dari table admin sesuai pencarian data
        $admin = DB::table('admin')
        ->where('administrator','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data admin ke view index
        return view('home',['admin' => $admin]);
 
    }
}
