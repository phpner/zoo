<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Page;

class AdminController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $page = Page::all();
        return view('Admin/Admin');
    }

    public function put_page(Request $post){

        if ($post->input('title')){
            $title = $post->input('title');
            $descrip =  $post->input('descrip');

            $file = $post->file('photo');

            dd($file->getClientOriginalName());
            die();

            $Page = new Page();

            $Page->title = $title;
            $Page->descrip = $descrip;


            if ($Page->save()){
                return redirect ()->route('admin');

            }

        }

        return view('Admin/put_page');

    }
}
