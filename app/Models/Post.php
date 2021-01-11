<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public $fillable = ['Title', 'description', 'image', 'category_id']; //this means which part of the form on the webapp should be filled in

   public function category ()                                      //this function is how u show the relations
   {
        return $this->belongsTo(Category::class);               //the object Post(line8) belongs to category
   }
}
