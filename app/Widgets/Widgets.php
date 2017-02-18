<?php
namespace App\Widgets;
use App\Model\Korm;


class Widgets{
    function get(){

        $all = \App\Model\Korm::where('category_id', '=', 1)->orderBy('id','desc')->take(5)->get();

        return  $all;
    }
}