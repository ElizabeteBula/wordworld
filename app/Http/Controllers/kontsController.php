<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kontsController extends Controller
{
    public function index(Request $request)
    {
		$users = DB::table('users')->get();
        return view('manskonts',['users'=> $users]);
    }    
	 protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

}