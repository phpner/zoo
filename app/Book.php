<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function commentBack(){

       return  $this->hasMany('App\CommentBack');
    }
}
