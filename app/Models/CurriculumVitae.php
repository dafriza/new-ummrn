<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CurriculumVitae extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        'educations' => 'array',
        'work_experiences' => 'array',
        'organizational_experiences' => 'array',
        'skills' => 'array',
        'awards' => 'array',
        'topics_of_researchs' => 'array',
        'publications' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
