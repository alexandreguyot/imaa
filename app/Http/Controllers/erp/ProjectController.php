<?php

namespace App\Http\Controllers\erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Project;
use App\Model\Dashboard;
use Carbon\CarbonPeriod;
use Carbon\Carbon;

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
     
    function store(Request $req) {
        $project = new Project();
        $project->name = $req->get('name');
        $project->city = $req->get('city');
        $project->start = Carbon::parse($req->get('start'));
        $project->end = Carbon::parse($req->get('end'));
        if ($project->save()) {
            $period = CarbonPeriod::create($project->start, '1 month', $project->end);
            foreach ($period as $dt) {
                $dashboard = new Dashboard();
                $dashboard->project_id = $project->id;
                $dashboard->publish = false;
                $dashboard->month = $dashboard->associateMonth($dt->format('F'));
                $dashboard->save();
            }
        }
        return $this->index();
    }

    function edit($id) {
        $project = Project::where('id', $id)->with('dashboards')->first();
        $dashboards = $project->dashboards;
        return view('contents.erp.projects.edit', [
            'project' => $project,
            'dashboards' => $dashboards
        ]);
    }

    function update(Request $req, $id) {
        $project = Project::where('id', $id)->with('dashboards')->first();
    
        if ($project->update()) {
        }
        return $this->index();
    }

    function delete($id) {
        $project = Project::where('id', $id)->first();
        if (!$project->users->isEmpty()) {
            $list_users = $project->users->pluck('id')->toArray();
            $project->users()->detach($list_users);
        }
        $project->destroy($id);
        return Redirect::route('erp.get.index-project');
    }
}
