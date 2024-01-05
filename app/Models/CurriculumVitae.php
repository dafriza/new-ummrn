<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CurriculumVitae extends Model
{
    use HasFactory, SoftDeletes;
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
    function getAllEducationsAttribute()
    {
        $education = implode('<br>', $this->educations);
        echo $education;
    }
    function getAllWorkExperiencesAttribute()
    {
        $work_experiences = implode('<br>', $this->work_experiences);
        echo $work_experiences;
    }
    function getAllOrganizationalExperiencesAttribute()
    {
        $organizational_experiences = implode('<br>', $this->organizational_experiences);
        echo $organizational_experiences;
    }
    function getAllSkillsAttribute()
    {
        $skills = implode('<br>', $this->skills);
        echo $skills;
    }
    function getAllAwardsAttribute()
    {
        $awards = implode('<br>', $this->awards);
        echo $awards;
    }
    function getAllTopicResearchsAttribute()
    {
        $topics_of_researchs = implode('<br>', $this->topics_of_researchs);
        echo $topics_of_researchs;
    }
    function getAllPublicationsAttribute()
    {
        $publications = implode('<br>', $this->publications);
        echo $publications;
    }
}
