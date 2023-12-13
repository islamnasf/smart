<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tutorial()
    {
        return $this->belongsTo(Tutorial::class, "tutorial_id", "id");
    }
    public function comments()
    {
        return $this->hasMany(Video::class, "video_id", "id");
    }
}
