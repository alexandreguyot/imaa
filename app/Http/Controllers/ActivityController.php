<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function Index()
    {
    	return view('contents.activity');
    }
    public function Domains()
    {
    	return view('contents.activity.domains');
    }
    public function Missions()
    {
    	return view('contents.activity.missions');
    }
    public function Sector()
    {
    	return view('contents.activity.sector');
    }
    
}
