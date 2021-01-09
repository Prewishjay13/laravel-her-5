<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['title'];

    public function Post()
    {
        return $this->hasMany('app\Models\Post');
    }
}
