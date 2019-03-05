<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
    	return view('contents.site.team');
    }
    public function resume()
    {
    	return view('contents.site.team.resume');
    }
    public function talents()
    {
    	return view('contents.site.team.talents');
    }
    public function difference()
    {
    	return view('contents.site.team.differences');
    }
    
}
