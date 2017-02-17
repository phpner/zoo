<?php

namespace App\Http\Controllers\Admin;

use App\model\Korm;
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

            $korm = new Korm();

            $korm->title = $post['title'];
            $korm->description =  $post['textarea'];
            $korm->img_link = $post['file'];
            $korm->category_id = $post['category'];


            if ($korm->save()){
                return redirect ()->route('admin');

            }

        }

        return view('Admin/put_page');

    }
}
