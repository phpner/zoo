<?php

namespace App\Http\Controllers\Book;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use  App\Book;
use  App\CommentBack;

class BookController extends BaseController
{

    public function getSingl($id){

        $data =   Book::where('id', '=',$id )->firstOrFail();

        $comment = Book::find($id )->CommentBack;

        return view('book/singl',['book'=> $data, 'comment'=> $comment ]);
    }
}
