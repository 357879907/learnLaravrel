<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    //
    public function index(Request $request){
        return redirect(url()->signedRoute('top.id',['id'=>2,'uid'=>3]));
//        return $request->input(['name','age']);
    }
    public function top(Request $request,$id,$uid){
//        return url('url',['id'=>2]);
        var_dump($request->hasValidSignature());
        return url()->previous();
    }
    public function form(){
        return request()->input('select.1');
    }
    public function view(){
        return view('view');
    }

    public function cookie(){
//        return Cookie::get('laravel_session');
//        return request()->cookie('laravel_session');
//        Cookie::queue('name','lile',10);
//        return Cookie::get('name');
//        cookie()->queue('age',20,10);
//        Cookie::queue('ttl','lile1',10);
        $cookie = cookie('name','libai',5);
        Cookie::queue($cookie);
//        return Cookie::get();
    }
    public function sess(){
//        return request()->session()->all();
//        return Session::all();
//        return session()->all();
//        return request()->session()->get('_token','default session');
//        return \request()->session()->get('name','de');
//        return \request()->session()->has('name');
//        session(['name'=>'']);
//        return \session()->all();
//        Session::put('age',20);
//        session()->put('age',30);
//        session()->push('info','a');
//        session()->push('info','b');
//        session()->push('info','b');
//        return session()->get('info.0');
//        session()->flush('ceshi','a');
//        session()->flash('ceshi','a');
//        session()->reflash();
//        session()->keep('ceshi');
//        session(['name'=>'aa','age'=>10,'gender'=>'难']);
//        var_dump(session()->pull('age'));
//        session()->regenerate();
        session()->regenerateToken();
        return \session()->all();
    }
}
