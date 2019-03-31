<?php

namespace App\Http\Controllers\erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Project;
use App\Model\Dashboard;
use Carbon\CarbonPeriod;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

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
        $project->finish = $req->get('finish') ? 1 : 0;
        $project->url = $req->get('url');
        $project->identifiant = $req->get('identifiant');
        $project->password = $req->get('password');
        if ($project->save()) {
            //Création d'un dossier pour le projet
            $project->createFolder();
            $period = CarbonPeriod::create(Carbon::parse($project->start)->firstOfMonth(), '1 month', Carbon::parse($project->end)->firstOfMonth());
            foreach ($period as $dt) {
                $dashboard = new Dashboard();
                $dashboard->project_id = $project->id;
                $dashboard->publish = false;
                $dashboard->year = $dt->format('Y');
                $dashboard->month = $dashboard->associateMonth($dt->format('F'));
                if ($dashboard->save()) {
                    $dashboard->createMonthFolder($project->id);
                    $dashboard->createDashboardFolder($project->id);
                    $dashboard->createPhotosFolder($project->id);
                }
            }
        }
        return Redirect::route('erp.get.index-project');
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
        $end = Carbon::parse($req->get('end'));
        $project->name = $req->get('name');
        $project->city = $req->get('city');
        $project->start = Carbon::parse($req->get('start'));
        $project->finish = $req->get('finish') ? 1 : 0;
        $project->url = $req->get('url');
        $project->identifiant = $req->get('identifiant');
        $project->password = $req->get('password');
        if ($end->greaterThan(Carbon::parse($project->end)) ) {
            $period = CarbonPeriod::create(Carbon::parse($project->end)->firstOfMonth(), '1 month', Carbon::parse($end)->firstOfMonth());
            foreach ($period as $dt) {
                $dashboard = new Dashboard();
                $dashboard->project_id = $project->id;
                $dashboard->publish = false;
                $dashboard->year = $dt->format('Y');
                $dashboard->month = $dashboard->associateMonth($dt->format('F'));
                $exist = Dashboard::where('project_id', $project->id)->where('month', $dashboard->month)->where('year', $dashboard->year)->first();
                if ($exist === null) {
                    $dashboard->save();
                    $dashboard->createMonthFolder($project->id);
                    $dashboard->createDashboardFolder($project->id);
                    $dashboard->createPhotosFolder($project->id);
                }
            }
        }
        $project->end = $end;

        if ($project->update() && request('dashboard')) {
            foreach(request('dashboard') as $db) {
                $dashboard = Dashboard::where('month', $db['month'])->where('project_id', $id)->where('year', $db['year'])->first();
                if (array_key_exists('publish', $db)) {
                    $dashboard->publish = 1;
                } else {
                    $dashboard->publish = 0;
                }
                if (array_key_exists('comment', $db)) {
                    $dashboard->comment = $db['comment'];
                }
                if (array_key_exists('dashboard', $db)) {
                    $files = Storage::allFiles($dashboard->getPathDashboardFolder($project->id));
                    Storage::delete($files);
                    $pathDashboard = Storage::disk('public')->put($dashboard->getPathDashboardFolder($project->id), $db['dashboard']);
                    $dashboard->dashboard = $pathDashboard;
                }
                if (array_key_exists('photos', $db)) {
                    $files = Storage::allFiles($dashboard->getPathPhotosFolder($project->id));
                    Storage::delete($files);
                    $pathConcat = '';
                    foreach($db['photos'] as $photo) {
                        $path = Storage::disk('public')->put($dashboard->getPathPhotosFolder($project->id), $photo);
                        $pathConcat = $path.';'.$pathConcat;
                    }
                    $dashboard->photos = $pathConcat;
                }
                $dashboard->update();
            }
        }
        return Redirect::route('erp.get.index-project');
    }

    function delete($id) {
        $project = Project::where('id', $id)->first();
        if (!$project->users->isEmpty()) {
            $list_users = $project->users->pluck('id')->toArray();
            $project->users()->detach($list_users);
        }
        $project->destroy($id);
        $project->dashboards()->delete();
        $project->deleteFolder();
        return Redirect::route('erp.get.index-project');
    }
}
