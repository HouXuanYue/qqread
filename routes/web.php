<?php

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
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
    Route::any('/index','Admin\\IndexController@index');
    route::get('welcome','Admin\\IndexController@welcome');
});

route::prefix('/rpmap')->group(function(){
    route::get('add','Admin\RpmapController@add');
    route::post('upload','Admin\RpmapController@upload');
});

route::prefix('/author')->group(function(){
   route::get('index','Author\\IndexController@index');
   route::any('shouye','Author\\IndexController@shouye');
   route::any('user','Author\\IndexController@user');
});
route::post('login','Author\\IndexController@login');



route::prefix('/index')->group(function(){
   route::get('index','Index\\IndexController@index');
});






