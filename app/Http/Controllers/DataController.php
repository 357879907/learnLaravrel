<?php

namespace App\Http\Controllers;
use App\Http\Models\Book;
use App\Http\Models\Profile;
use App\Http\Models\Role;
use App\Http\Models\User;
use App\Scopes\StatusScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function foo\func;
use Barryvdh\Debugbar\Facade as Debugbar;
class DataController
{
    public function index(){
        $user = User::find(99);
        $roleId = 5;
//        $user->role()->syncWithoutDetaching([
//            10=>['details'=>'haha1'],
//            11=>['details'=>'hehe2'],
//            12=>['details'=>'ha3'],
//            13=>['details'=>'he4']
//        ]);
        $user->role()->toggle([1,2,3]);
//        $user->role()->updateExistingPivot($roleId,['details'=>'aa']);
//        Debugbar::info($info);
        return view('data');
    }
}
