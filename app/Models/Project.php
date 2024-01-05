<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    private const status_define = [
        1 => 'Open,success',
        2 => 'Draft,secondary',
        3 => 'Closed,danger',
    ];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    function getYearAttribute()
    {
        return date_format($this->created_at, 'Y');
    }
    function getStatusDefAttribute()
    {
        return explode(',', self::status_define[$this->status]);
    }
}
