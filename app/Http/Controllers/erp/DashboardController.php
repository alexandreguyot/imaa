<?php

namespace App\Http\Controllers\erp;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Model\Project;

class DashboardController extends Controller
{
    function index(Request $request) {
        $user = Auth::user();
        $projects = $user->projects;
        if ( $request->route('id')) {
            $project_id = $request->route('id');    
        } else {
            $project_id = $projects->first()->id;
        }
        $projectDashboard = Project::where('id', $project_id)->with('dashboards')->first();
        return view('contents.erp.projects', [
            'projects' => $projects,
            'projectDashboard' => $projectDashboard
        ]);
    }
}
