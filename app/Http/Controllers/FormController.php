<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Http\Requests\FormCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FormController extends Controller
{
    //显示表单
    public function form(){
        return view('form');
    }
    //接收表单数据，进行验证
    public function recive(Request $request){
        //验证规则，如果验证不通过，直接返回原页面,不会执行下去
        $request->validate([
//            'username'=>'required|min:2|max:6',//不为空，长度最小为2，最大为6
//            'username'=>'required|not_in:a,b,c',//不为空，长度最小为2，最大为6
            'username'=>Rule::unique('users')->where(function($query){
                $query->where('id','>',19)->where('id','<',30);
            }),
            'password'=>'required|min:6|confirmed'
        ]);
//        $validatior = Validator::make($request->input(),[
//            'username'=>'required|min:2|max:6',//不为空，长度最小为2，最大为6
//            'password'=>'required|min:6'
//        ]);
//        $validatior->after(function ($validatior){
//            $validatior->errors()->add('info','隐藏info字段');
//        });
//        if($validatior->fails()){
//            //如果没有通过，可以手动填写要跳转的路由,保存错误信息，返回上一次的填写数据
//            //如果没有保存错误信息，则在页面上无法展示错误
//            //如果没有返回上一次填写数据，则无法使用old()来获取上一次的数据
//            return redirect('/form')->withErrors($validatior)->withInput();
//        }
        return '验证通过';
    }

    public function userList(){
        $users = User::paginate(2);
        return view('data',['users'=>$users]);
    }
}
