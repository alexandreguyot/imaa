<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    function Index() {
        return view('contents.erp.users.list');
    }
    function Creation() {
        return view('contents.erp.users.create');
    }
    function Modification() {
        return view('contents.erp.users.edit');
    }
}


