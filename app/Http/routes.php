<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', 'MathController@index');//留言列表路由
Route::get('add', 'MathController@add');//留言添加界面展示
Route::post('add', 'MathController@addpost');//处理留言添加
Route::match(['get','post'],'edit/{id}', 'MathController@edit')->where('id','[0-9]{1,3}');//同时处理留言编辑的界面展示和提交修改留言功能
Route::get('del/{id}', 'MathController@del');//删除留言
