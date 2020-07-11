<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\Book
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\Book whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Http\Models\User|null $user
 */
class Book extends Model
{
    public $timestamps = false;
    protected $fillable = ['title'];

    //反向一对多
    public function user(){
        return $this->belongsTo(User::class)->withDefault([
            'id'=>0,
            'username'=>'游客'
        ]);
    }
}
