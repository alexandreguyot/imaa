<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Project;

class Dashboard extends Model
{
    protected $fillable = [];

    function dashboards() {
        return $this->belongsTo(Project::class);
    }
}
