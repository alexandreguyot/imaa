<?php

namespace App\Http\Controllers\erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Project;
use App\Model\User;

class UserController extends Controller
{
    function index() {
        $users = User::all();
        return view('contents.erp.users.list', ['users' => $users]);
    }

    function create() {
        $projects = Project::all();
        return view('contents.erp.users.create', ['projects' => $projects]);
    }
     
    function store(Request $req) {
        $user = new User();
        $user->lastname = $req->get('lastname');
        $user->firstname = $req->get('firstname');
        $user->password = $req->get('password');
        $user->email = $req->get('email');
        $user->role = $req->get('role');
        $user->entreprise = $req->get('entreprise');
        $user->logo = $req->get('logo');
        $user->telephone = $req->get('telephone');
        if ($user->save()) {
            $user->projects()->sync($req->get('list_projects'));
        }
        return $this->index();
    }

    function edit($id) {
        $user = User::where('id', $id)->first();
        $projects = Project::all();
        return view('contents.erp.users.edit', [
            'user' => $user,
            'projects' => $projects
        ]);
    }

    function update(Request $req, $id) {
        $user = User::where('id', $id)->first();
        $user->lastname = $req->get('lastname');
        $user->firstname = $req->get('firstname');
        $user->password = $req->get('password');
        $user->email = $req->get('email');
        $user->role = $req->get('role');
        $user->entreprise = $req->get('entreprise');
        $user->logo = $req->get('logo');
        $user->telephone = $req->get('telephone');
        if ($user->update()) {
            $user->projects()->sync($req->get('list_projects'));
        }
    }

    function delete($id) {
        $user = User::where('id', $id)->first();
        $user->projects->detach();
        $user->detele();
        return $this->index();
    }
}
