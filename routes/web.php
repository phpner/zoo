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

// Услуги
Route::get('/uslugi',['uses'=> 'UslugiController@index', 'as'=> 'uslugi']);
//Корма
Route::get('/korma',['uses' => 'KormaController@index', 'as' => 'korma']);



