<?php

namespace App\Http\Controllers\erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Project;

class ProjectController extends Controller
{
    function index() {
        $projects = Project::all();
        return view('contents.erp.projects.list', [
            'projects' => $projects,
        ]);
    }

    function create() {
        $projects = Project::all();
        return view('contents.erp.projects.create', [
            'projects' => $projects,
        ]);
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
