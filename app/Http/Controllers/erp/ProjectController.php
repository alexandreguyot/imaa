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
use Illuminate\Filesystem\Filesystem;

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
            $path_project = $project->name . '_' . $project->id;
            Storage::makeDirectory($path_project, 0775, true);
            $period = CarbonPeriod::create($project->start, '1 month', $project->end);
            foreach ($period as $dt) {
                $dashboard = new Dashboard();
                $dashboard->project_id = $project->id;
                $dashboard->publish = false;
                $dashboard->year = $dt->format('Y');
                $dashboard->month = $dashboard->associateMonth($dt->format('F'));
                if ($dashboard->save()) {
                    $pathMonth = $path_project . '/' . $dashboard->month.'_'.$dashboard->year;
                    Storage::makeDirectory($pathMonth, 0775, true);
                    $pathDashboard = $pathMonth . '/' . 'dashboard';
                    $pathPhotos = $pathMonth . '/' . 'photos';
                    Storage::makeDirectory($pathDashboard, 0775, true);
                    Storage::makeDirectory($pathPhotos, 0775, true);
                }
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
        $end = Carbon::parse($req->get('end'));
        $project->name = $req->get('name');
        $project->city = $req->get('city');
        $project->start = Carbon::parse($req->get('start'));
        $project->finish = $req->get('finish') ? 1 : 0;
        $project->url = $req->get('url');
        $project->identifiant = $req->get('identifiant');
        $project->password = $req->get('password');
        if ($end->greaterThan(Carbon::parse($project->end)) ) {
            $period = CarbonPeriod::create($project->end, '1 month', $end);
            $path_project = $project->name . '_' . $project->id;
            foreach ($period as $dt) {
                $dashboard = new Dashboard();
                $dashboard->project_id = $project->id;
                $dashboard->publish = false;
                $dashboard->year = $dt->format('Y');
                $dashboard->month = $dashboard->associateMonth($dt->format('F'));
                if ($dashboard->save()) {
                    $pathMonth = $path_project . '/' . $dashboard->month.'_'.$dashboard->year;
                    Storage::makeDirectory($pathMonth, 0775, true);
                    $pathDashboard = $pathMonth . '/' . 'dashboard';
                    $pathPhotos = $pathMonth . '/' . 'photos';
                    Storage::makeDirectory($pathDashboard, 0775, true);
                    Storage::makeDirectory($pathPhotos, 0775, true);
                }
            }
        } 
        $project->end = $end;

    
        if ($project->update()) {
            foreach(request('dashboard') as $db) {
                $dashboard = Dashboard::where('month', $db['month'])->where('project_id', $id)->first();
                if (array_key_exists('publish', $db)) {
                    $dashboard->publish = $db['publish'];
                }
                if (array_key_exists('comment', $db)) {
                    $dashboard->comment = $db['comment'];
                }
                if (array_key_exists('dashboard', $db)) {
                    $pathDashboard = $project->name . '_' . $project->id . '/' .  $dashboard->month.'_'.$dashboard->year . '/' . 'dashboard';
                    $files = Storage::allFiles($pathDashboard);
                    Storage::delete($files);
                    $path = $db['dashboard']->store($pathDashboard);
                    $dashboard->dashboard = $path;
                }
                if (array_key_exists('photos', $db)) {
                    $pathPhotos = $project->name . '_' . $project->id . '/' .  $dashboard->month.'_'.$dashboard->year . '/' . 'photos';
                    $files = Storage::allFiles($pathPhotos);
                    Storage::delete($files);
                    $pathConcat = '';
                    foreach($db['photos'] as $photo) {
                        $path = $photo->store($pathPhotos);
                        $pathConcat = $path.';'.$pathConcat;
                    }
                    $dashboard->photos = $pathConcat;
                }
                $dashboard->update();
            }
        }
        return $this->index();
    }

    function delete($id) {
        $project = Project::where('id', $id)->first();
        if (!$project->users->isEmpty()) {
            $list_users = $project->users->pluck('id')->toArray();
            $project->users()->detach($list_users);
        }
        if (!$project->dashboards->isEmpty()) {
            $project->dashboards()->detach();
        }
        $project->destroy($id);
        return Redirect::route('erp.get.index-project');
    }
}
