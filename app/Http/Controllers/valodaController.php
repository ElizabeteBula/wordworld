<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class valodaController extends Controller
{
    public function index(Request $request)
    {
		$vardi = DB::table('vardi')->get();
        return view('manavardnica', ['vardi' => $vardi]);
    }  
	
		public function insertData(Request $request) {
			$valoda = DB::table('valoda')->where('id', $request->valoda)->pluck('valoda');
			DB::table('vardi')->insert(['valoda' => $valoda[0], 'vards' => $request->vards, 'tulkojums' => $request->tulkojums]);
			return redirect('/manavardnica');
		}
		protected function create(array $data)
    {
        return vardi::create([
            'valoda' => $data['valoda'],
            'vards' => $data['vards'],
            'tulkojums' => $data['tulkojums'],
        ]);
    }
}