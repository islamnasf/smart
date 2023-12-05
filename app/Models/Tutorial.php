<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function video()
    {
        return $this->belongsTo(Video::class, "tutorial_id", "id");
    }
}
