<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MathController extends Controller
{
    //留言列表
    public function index(){
    return view();
    }
     
    //添加留言界面
    public function add(){
    return view('add');
    }
     
    //添加留言
    public function addpost(){
     
    }
     
    //修改留言
    public function edit(){
    return view();
    }
     
    //删除留言
    public function del(){
     
    }
}
