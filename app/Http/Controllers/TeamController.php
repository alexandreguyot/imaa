<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function Index()
    {
    	return view('contents.team');
    }
    public function Resume()
    {
    	return view('contents.team.resume');
    }
    public function Talents()
    {
    	return view('contents.team.talents');
    }
    public function Difference()
    {
    	return view('contents.team.differences');
    }
    
}
