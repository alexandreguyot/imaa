<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function index()
    {
    	return view('contents.activity');
    }
    public function domains()
    {
    	return view('contents.activity.domains');
    }
    public function missions()
    {
    	return view('contents.activity.missions');
    }
    public function sector()
    {
    	return view('contents.activity.sector');
    }
    
}
