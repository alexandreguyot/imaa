<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Project;

class Dashboard extends Model
{
    protected $fillable = [
        'project_id', 'month', 'comment', 'publish'
    ];

    function projects() {
        return $this->belongsTo(Project::class);
    }
}
