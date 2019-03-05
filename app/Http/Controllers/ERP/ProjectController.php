<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    function index() {
        return view('contents.erp.projects.list');
    }

    function create() {
        return view('contents.erp.projects.create');
    }
     
    function store() {

    }

    function edit() {
        return view('contents.erp.projects.edit');
    }

    function update() {
        
    }

    function delete() {

    }
}
