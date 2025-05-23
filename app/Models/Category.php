<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use UUID;
    protected $fillable = [
        'name',
        'slug',
    ];


    // Define the relationship with the Post model
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
