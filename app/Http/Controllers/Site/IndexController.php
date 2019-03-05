<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	return view('contents.site.index');
    }
    public function home()
    {
    	return view('contents.site.index-home');
    }
}

