<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use Carbon\Carbon;


class Project extends Model
{
    protected $fillable = [
        'name',
        'city',
        'start',
        'end',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['start', 'end'];
    
    function dashboards() {
        return $this->hasMany(Dashboard::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'projects_users', 'project_id', 'user_id');
    }

    public function getEndAttribute($value) {
        return Carbon::parse($value)->format('Y-m-d');
    }

    public function getStartAttribute($value) {
        return Carbon::parse($value)->format('Y-m-d');
    }
}
