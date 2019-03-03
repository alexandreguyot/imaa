<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [];
    
    function dashboards() {
        return $this->hasMany(Dashboard::class);
    }

    public function projetcts() {
        $this->belongsToMany(User::class);
    }
}