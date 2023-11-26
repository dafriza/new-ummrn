<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommunitiesOfPractice extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        'member' => 'array'
    ];
    public function author()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
    public function communities_practice()
    {
        return $this->hasMany(CommunityPosts::class, 'communities_practice_id', 'id');
    }
}
