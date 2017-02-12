<?php
use  App\Page;
use App\Book;
use  App\CommentBack;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return View::make('home');
});

Auth::routes();


Route::get('/admin', ['uses' => 'Admin\AdminController@index', 'as'=> 'admin']);

Route::group(['prefix' => 'admin'], function () {

    Route::match(['get','post'],'put_page', ['uses' => 'Admin\AdminController@put_page', 'as' => 'put_pgae']);

});


Route::get('page/{id}',function($id){

    $id = (int) $id;

    $data = Page::where('id', '=', $id)->firstOrFail();

    return view('pages',['page' =>  $data]);

});
        //booK

Route::group(['prefix'=>'book'],function (){

    Route::get('{id}',['uses' => 'Book\BookController@getSingl']);
});

Route::get('book',function(){
    $n = Book::all();

    return view('book',['link' =>  $n ]);
});

