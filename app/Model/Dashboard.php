<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Project;

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
}