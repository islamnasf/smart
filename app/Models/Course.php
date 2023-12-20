<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function techer()
    {
        return $this->belongsTo(User::class, 'techer_id', 'id');
    }
    public function tutorial()
    {
        return $this->hasMany(tutorial::class, 'course_id', 'id');
    }
    public function cartitem()
    {
        return $this->hasMany(CartItem::class, "course_id", "id");
    }
}
