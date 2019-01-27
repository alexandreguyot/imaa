<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalesController extends Controller
{
    public function Index()
    {
    	return view('contents.legales');
    }
    
}