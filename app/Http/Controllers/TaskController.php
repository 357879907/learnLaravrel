<?php
namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Support\Facades\Route;

class TaskController extends Controller{
    public function index(){
//        return view('admin.task');
//        return view()->first(['admin.index','admin.task'],[
//            'name'=>'&',
//            'json' => [1,'lilei','aiti'],
//            'obj' => ['id'=>1,'name'=>'lilei','hobby'=>'aiti'],
//            'num' => 18,
//            'num1' => '',
//        ]);
        return view('index');
    }
    public function read($id){
        return 'id:'.$id;
    }
    public function form(){
        return view('form');
    }
    public function create(){
        $method = request()->method();
        $name = request('name');
        var_dump($method);
        var_dump($name);
    }
}
