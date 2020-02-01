<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    public function index(){

    	//mengambil data dari table review
    	$review = DB::table('review')->get();

    	return view('index_review', ['review' => $review]);
    }
}
