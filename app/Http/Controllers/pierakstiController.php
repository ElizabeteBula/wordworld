<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pieraksti;

class pierakstiController extends Controller
{
    public function index(Request $request)
    {
        return view('pieraksti');
    }    
	//DB::table('users')->update(['votes' => 1]);

	
    public function storepieraksti(){
        $pieraksti = new pieraksti;
        $pieraksti->pieraksti = request('pieraksti');
        //$pieraksti->save();
		DB::table('pieraksti')->insert(['pieraksti' => $pieraksti]);
        return redirect('/pieraksti');
    }
	
	
	// public function insertData(Request $request, $vards, $tulkojums, $valoda) {
			// DB::table('vardi')->insert(['valoda' => $valoda, 'vards' => $vards, 'tulkojums' => $tulkojums]);
			// return view('valoda')
		// }
	
	
		public function Pievienot(Request $request, $id) {
		return $pieraksti;
		//view('pieraksti', array('pierakstiId' => $id));
	}
	
}