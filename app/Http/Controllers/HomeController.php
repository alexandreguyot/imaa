<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return route('erp.projets-index');
    }

    public function doLogin()
    {
        $rules = array(
            'email'    => 'required|email', 
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::route('home')
                ->withErrors($validator) 
                ->withInput(Input::except('password'));
        } else {

                // create our user data for the authentication
                $userdata = array(
                    'email'     => Input::get('email'),
                    'password'  => Input::get('password')
                );

                // attempt to do the login
                if (Auth::attempt($userdata)) {
                    if (Auth::user()->isAdmin()) {
                        return Redirect::route('erp.projets-index');
                    }
                    return Redirect::route('erp.dashboard');
                } else {        
                    // validation not successful, send back to form 
                    return Redirect::route('home');
                }

        }
    }

    public function logout() {
        Auth::logout();
        return Redirect::route('home');
    }
}
