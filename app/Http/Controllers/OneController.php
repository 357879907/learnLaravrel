<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
//        return response([1,2,3],201);
//        return response()->view('task',['id'=>1])->header('Content-type','text/plain');
        return response('<b>HHH</b>')->header('Content-type','text/plain');
    }
}
