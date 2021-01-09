<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public $fillable = ['Title', 'description', 'image', 'category_id'];

   public function category ()
   {
        return $this->belongsTo('app\Models\Category');
   }
}
