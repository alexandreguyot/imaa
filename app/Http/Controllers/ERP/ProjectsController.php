<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    function Index() {
        return view('contents.erp.projects.list');
    }
    function Creation() {
        return view('contents.erp.projects.create');
    }
    function Modification() {
        return view('contents.erp.projects.edit');
    }
}


