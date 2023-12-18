<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoComment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function video()
    {
        return $this->belongsTo(Video::class, "video_id", 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, "user_id", 'id');
    }
}
