<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class valodaController extends Controller
{
    public function index(Request $request)
    {
		$vardi = DB::table('valoda')->get();
        return view('manavardnica', ['vardi' => $vardi]);
    }  
	
		public function insertData(Request $request, $vards, $tulkojums, $valoda) {
			DB::table('vardi')->insert(['valoda' => $valoda, 'vards' => $vards, 'tulkojums' => $tulkojums]);
			return view('valoda');
		}
}