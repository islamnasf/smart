<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function package()
    {
        return $this->belongsToMany(AnotherPackage::class, 'package_books', "book_id", "package_id", "id");
    }
    public function techer()
    {
        return $this->belongsTo(User::class, 'techer_id', 'id');
    }
}
