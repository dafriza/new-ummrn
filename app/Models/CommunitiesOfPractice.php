<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommunitiesOfPractice extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $casts = [
        'member' => 'array',
    ];
    private const define_status = [
        '0' => 'Tidak Aktif,danger',
        '1' => 'Aktif,success',
    ];
    public function author_lecture()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
    public function communities_posts()
    {
        return $this->hasMany(CommunityPosts::class, 'communities_practice_id', 'id');
    }
    function getAllMemberAttribute()
    {
        $member_map = collect($this->member)->map(function ($member, $key) {
            return $member['fullname'];
        });
        // return $member_map;
        $member = implode('<br>', $member_map->toArray());
        echo $member;
    }
    function getStatusDefAttribute()
    {
        return explode(',', self::define_status[$this->status]);
    }
}
