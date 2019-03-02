<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    function Index() {
        return view('contents.erp.clients.list');
    }
    function Creation() {
        return view('contents.erp.clients.create');
    }
    function Modification() {
        return view('contents.erp.clients.edit');
    }
}


