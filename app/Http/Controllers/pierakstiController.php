<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pieraksti;
use Illuminate\Support\Facades\Auth;

class pierakstiController extends Controller
{
    public function index(Request $request)
    {
		$pieraksti = DB::table('pieraksti')->where('users', Auth::user()->id)->pluck('pieraksti');
        return view('pieraksti', array('pieraksti' => $pieraksti));
    }    
	//DB::table('users')->update(['votes' => 1]);

	
  //  public function storepieraksti(){
    //    $pieraksti = new pieraksti;
      //  $pieraksti->pieraksti = request('pieraksti');
        //$pieraksti->save();
		//DB::table('pieraksti')->insert(['pieraksti' => $pieraksti]);
        //return redirect('/pieraksti');
   // }
	
	
	// public function insertData(Request $request, $vards, $tulkojums, $valoda) {
			// DB::table('vardi')->insert(['valoda' => $valoda, 'vards' => $vards, 'tulkojums' => $tulkojums]);
			// return view('valoda')
		// }
	
	
	public function Pievienot(Request $request) {
		DB::table('pieraksti')->insert(['pieraksti' => $request->pieraksti, 'users' => Auth::user()->id]);
		return redirect('/pieraksti');
	}
	
	//protected function create(array $data)
    //{
      //  return pieraksti::create([
        //    'pieraksti' => $data['pieraksti'],
        //]);
    //}
}