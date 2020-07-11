<?php


namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\Role
 *
 * @property int $id
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Role query()laravel_role_user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Role whereType($value)
 * @mixin \Eloquent
 */
class Role extends Model
{
    public $timestamps = false;
    public function user(){
        //反向多对多，第三和第四个参数和正向的相反，对应该类的外键在前
        return $this->belongsToMany(User::class,'role_user','role_id','user_id')
            ->withPivot(['details']);
    }
}
