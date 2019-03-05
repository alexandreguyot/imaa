<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contents.site.contact');
    }
    public function Confirmation()
    {
    	return view('contents.site.contact-confirmation');
    }
    
}