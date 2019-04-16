<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function edit()
    {
        $user = User::where('id', Auth::user()->id)->with('projects')->first();
        return view('contents.site.users.edit', ['user' => $user]);
    }

    function update($id)
    {
        $user = User::where('id', $id)->first();
        $user->lastname = request('lastname');
        $user->firstname = request('firstname');
        if ($user->password !== bcrypt(request('password')) && !empty(request('password'))) {
            $user->password = bcrypt(request('password'));
        }
        $user->email = request('email');
        $user->role = request('role') ? request('role') : 'Utilisateur';
        $user->entreprise = request('entreprise');
        $user->telephone = request('telephone');
        if (request('logo')) {
            $files = Storage::allFiles($user->getPathLogoFolder());
            Storage::delete($files);
            $user->logo = Storage::disk('public')->put($user->getPathLogoFolder(), request('logo'));
        }
        return Redirect::route('dashboard');
    }
}
