<?php

namespace App\Http\Controllers\ERP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function index() {
        return view('contents.erp.users.list');
    }

    function create() {
        return view('contents.erp.users.create');
    }
     
    function store() {

    }

    function edit() {
        return view('contents.erp.users.edit');
    }

    function update() {
        
    }

    function delete() {

    }
}
