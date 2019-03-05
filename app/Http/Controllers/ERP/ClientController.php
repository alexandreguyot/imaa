<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    function index() {
        return view('contents.erp.clients.list');
    }
    function create() {
        return view('contents.erp.clients.create');
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
