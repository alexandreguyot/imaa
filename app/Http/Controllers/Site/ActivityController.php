<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function index()
    {
    	return view('contents.site.activity');
    }
    public function domains()
    {
    	return view('contents.site.activity.domains');
    }
    public function missions()
    {
    	return view('contents.site.activity.missions');
    }
    public function sector()
    {
    	return view('contents.site.activity.sector');
    }
    
}
