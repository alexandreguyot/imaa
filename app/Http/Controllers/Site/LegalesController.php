<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LegalesController extends Controller
{
    public function index()
    {
    	return view('contents.site.legales');
    }
    
}