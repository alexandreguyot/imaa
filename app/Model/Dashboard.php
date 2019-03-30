<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Dashboard extends Model
{
    protected $fillable = [
        'project_id', 'month', 'comment', 'publish', 'photos', 'dashboard'
    ];

    function projects() {
        return $this->belongsTo(Project::class);
    }
    function getMonths() {
        return [
        'January' => 'Janvier',
        'February' => 'Février',
        'March' => 'Mars',
        'April'=> 'Avril',
        'May' => 'Mai',
        'June' => 'Juin',
        'July' => 'Juillet',
        'August' => 'Août',
        'September' => 'Septembre',
        'October' => 'Octobre',
        'November' => 'Novembre',
        'December' => 'Décembre'
        ];
    }

    function associateMonth($month) {
        return $this->getMonths()[$month];
    }

    function getPhotosAttribute($value) {
        return array_map('trim', explode(',', $value));
    }

    public function createMonthFolder($project_id) {
        Storage::disk('public')->makeDirectory('/projects/project_'.$project_id .'/'. $this->month.'_'.$this->year, 775, true);
    }

    public function createDashboardFolder($project_id) {
        Storage::disk('public')->makeDirectory('/projects/project_'.$project_id .'/'. $this->month.'_'.$this->year.'/dashboard', 775, true);
    }

    public function createPhotosFolder($project_id) {
        Storage::disk('public')->makeDirectory('/projects/project_'.$project_id .'/'. $this->month.'_'.$this->year.'/photos', 775, true);
    }

    public function getPathPhotosFolder($project_id) {
        return '/projects/project_'.$project_id .'/'. $this->month.'_'.$this->year.'/photos';
    }

    public function getPathDashboardFolder($project_id) {
        return '/projects/project_'.$project_id .'/'. $this->month.'_'.$this->year.'/dashboard';
    }
}