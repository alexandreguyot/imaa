<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
    	return view('contents.team');
    }
    public function resume()
    {
    	return view('contents.team.resume');
    }
    public function talents()
    {
    	return view('contents.team.talents');
    }
    public function difference()
    {
    	return view('contents.team.differences');
    }
    
}
