<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'city',
        'start',
        'end',
    ];
    
    function dashboards() {
        return $this->hasMany(Dashboard::class);
    }

    public function users() {
        $this->belongsToMany(User::class);
    }
}
