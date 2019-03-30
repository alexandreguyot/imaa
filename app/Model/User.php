<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Project;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'telephone', 'logo', 'role', 'entreprise'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects() {
        return $this->belongsToMany(Project::class, 'projects_users', 'user_id', 'project_id');
    }

    public function isAdmin() {
        return $this->role === 'Administrateur';
    }

    public function hasProject($project_id) {
        return false;
    }
    
    public function renderProject() {
        $names = $this->projects->pluck('name');
        $string = '';
        foreach($names as $key => $name) {
            $string .= $name .', ';
        }
        return $string;
    }

    public function registerLogo() {
        
    }
}
