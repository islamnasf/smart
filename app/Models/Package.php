<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{

    protected $guarded = [];

    use HasFactory;
    public function course()
    {
        return $this->belongsToMany(Course::class, 'package_courses', "course_id", "package_id", "id");
    }
}
