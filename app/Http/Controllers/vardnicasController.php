<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vardnicasController extends Controller
{
    public function index(Request $request)
    {
		$vardi = DB::table('valoda')->get();
        return view('manavardnica', ['vardi' => $vardi]);
    }  

	public function choseLanguage(Request $request, $id) {
		$valoda = DB::table('valoda')->where('id', $id)->pluck('valoda');
		$vardi = DB::table('vardi')->where('valoda', $valoda[0])->get();
		return view('valoda', array('valodasId' => $id, 'vardi' => $vardi));
	}
	
	/*
		public function insertData(Request $request, $vards, $tulkojums, $valoda) {
			DB::table('vardi')->insert(['valoda' => $valoda, 'vards' => $vards, 'tulkojums' => $tulkojums]);
			return view('valoda')
		}
	*/
}