<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use UUID;
    protected $fillable = ['id','name', 'type', 'url', 'author_id'];
}
