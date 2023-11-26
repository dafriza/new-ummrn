<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommunityPosts extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    public function community_practice()
    {
        return $this->belongsTo(CommunitiesOfPractice::class, 'communities_practice_id', 'id');
    }
}
