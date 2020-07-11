<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        echo '欢迎管理员';
    }
    public function login(){
        echo '登录失败，重新登录';
    }
}
