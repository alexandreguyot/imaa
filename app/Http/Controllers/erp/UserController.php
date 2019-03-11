<?php

namespace App\Http\Controllers\erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Project;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    function index() {
        return view('contents.erp.users.list');
    }

    function create() {
        $projects = Project::all();
        return view('contents.erp.users.create', ['projects' => $projects]);
    }
     
    function store() {
        dd(Input::all());
    }

    function edit() {
        return view('contents.erp.users.edit');
    }

    function update() {
        
    }

    function delete() {

    }
}
