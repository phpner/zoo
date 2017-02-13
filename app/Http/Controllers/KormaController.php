<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KormaController extends Controller
{
    public function index()
    {
        return view('layouts/korma');
    }
}
