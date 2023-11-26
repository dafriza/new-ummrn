<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;
    protected $guarded = [];
    public function author()
    {
        return $this->hasMany(CommunitiesOfPractice::class, 'author', 'id');
    }
    public function curriculum_vitae()
    {
        return $this->hasMany(CurriculumVitae::class, 'user_id', 'id');
    }
    public function project()
    {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }
}
