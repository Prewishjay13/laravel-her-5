<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['title'];

    public function Post()
    {
        return $this->hasMany(Post::class);  //ctr + space to fill in the name of the class
    }                                               //when you make a category, or use this function it roughly means the category has one or more posts
}
