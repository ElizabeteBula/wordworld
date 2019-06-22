<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class vardnicasController extends Controller
{
    public function index(Request $request)
    {
        return view('manavardnica');
    }    
}