<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class kontsController extends Controller
{
    public function index(Request $request)
    {
        return view('manskonts');
    }    
}