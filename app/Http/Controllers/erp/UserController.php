<?php

namespace App\Http\Controllers\erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Project;
use App\Model\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    function index() {
        $users = User::all();
        return view('contents.erp.users.list', ['users' => $users]);
    }

    function create() {
        $projects = Project::where('finish', 0)->get();
        return view('contents.erp.users.create', ['projects' => $projects]);
    }
     
    function store() {
        $user = new User();
        $user->lastname = request('lastname');
        $user->firstname = request('firstname');
        $user->password = bcrypt(request('password'));
        $user->email = request('email');
        $user->role = request('role');
        $user->entreprise = request('entreprise');
        $user->telephone = request('telephone');
        if ($user->save()) {
            $user->createUserFolder();
            $user->logo = Storage::disk('public')->put($user->getPathLogoFolder(), request('logo'));
            $user->update();
            $user->projects()->sync(request('list_projects'));
        }
        return Redirect::route('erp.get.index-user');
    }

    function edit($id) {
        $user = User::where('id', $id)->with('projects')->first();
        $list_projects = $user->projects->pluck('id')->toArray();
        $projects = Project::where('finish', '=' , 0)->get();
        return view('contents.erp.users.edit', [
            'user' => $user,
            'list_projects' => $list_projects,
            'projects' => $projects
        ]);
    }

    function update($id) {
        $user = User::where('id', $id)->first();
        $user->lastname = request('lastname');
        $user->firstname = request('firstname');
        if ($user->password !== bcrypt(request('password')) && !empty(request('password'))) {
            $user->password = bcrypt(request('password'));
        }
        $user->email = request('email');
        $user->role = request('role');
        $user->entreprise = request('entreprise');
        $user->telephone = request('telephone');
        if(request('logo')) {
            $user->logo = Storage::disk('public')->put($user->getPathLogoFolder(), request('logo'));
        }
        if ($user->update()) {
            $user->projects()->sync(request('list_projects'));
        }
        return Redirect::route('erp.get.index-user');
    }

    function delete($id) {
        $user = User::where('id', $id)->first();
        if (!$user->projects->isEmpty()) {
            $list_projects = $user->projects->pluck('id')->toArray();
            $user->projects()->detach($list_projects);
        }
        $user->destroy($id);
        $user->deleteFolder();
        return Redirect::route('erp.get.index-user');
    }
}
