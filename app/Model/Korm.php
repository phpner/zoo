<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Korm extends Model
{

    function imgkorm(){

        return $this->hasMany('Baum\Node');

    }
}
