<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class WelcomeController extends Controller
{
    function projet_1() {
        return view('contents.erp.projet_1');
    }
    function projet_2() {
        return view('contents.erp.projet_2');
    }
    function projet_3() {
        return view('contents.erp.projet_3');
    }
}
