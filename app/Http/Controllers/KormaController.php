<?php

namespace App\Http\Controllers;

use App\model\Korm;
use Illuminate\Http\Request;

class KormaController extends Controller
{
    public function index()
    {
        $korm =  Korm::orderBy('id', 'desc')->paginate(5);
        return view('layouts/korma',['korms'=> $korm]);
    }
}
