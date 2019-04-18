<?php

namespace App\Http\Controllers\erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Project;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    function index() {
        return view('contents.erp.welcome');
    }
}

