<?php

use App\Jobs\Logexample;

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
    dispatch(new Logexample);
    return 'ログへの出力ジョブを実行しました';
//    return view('welcome');
});

//Route::get('hello',function() {
//   return view('hello',['message'=>'HelloWorld']);
//});

//Route::get('/hello', function () {
//    return '<html><body><h1>Hello World</h1><p>this is sample page.</p></body></html>';
//});

Route::get('hello', 'HelloController@getIndex');
Route::post('hello', 'HelloController@postIndex');
Route::get('dbaccess','DbaccessController@getIndex');

Route::get('dbaccess/insert', 'DbaccessController@getInsert');
Route::post('dbaccess/insert', 'DbaccessController@postInsert');

Route::get('dbaccess/update', 'DbaccessController@getUpdate');
Route::put('dbaccess/update', 'DbaccessController@putUpdate');

Route::get('dbaccess/delete', 'DbaccessController@getDelete');

Route::get('hello/login', 'DbaccessController@getLogin');
Route::post('hello/login', 'DbaccessController@postLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
