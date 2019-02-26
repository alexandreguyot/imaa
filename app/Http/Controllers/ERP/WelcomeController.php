<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    function index() {
        return view('contents.index-home');
    }
}
