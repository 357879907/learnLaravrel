<?php


namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\User
 *
 * @property int $id 自动编号
 * @property string $username
 * @property string $password
 * @property string $gender
 * @property string|null $email
 * @property float $price
 * @property string $details
 * @property int|null $uid
 * @property int $status 状态
 * @property mixed|null $list
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon $created_at 创建时间
 * @property \Illuminate\Support\Carbon $updated_at 修改时间
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereList($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\User whereUsername($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Models\Book[] $book
 * @property-read int|null $book_count
 * @property-read \App\Http\Models\Profile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Models\Role[] $role
 * @property-read int|null $role_count
 */
class User extends Model
{
    /**正向一对一关联。方法名可以任意定义
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
//    protected $with = ['book'];
    public function profile(){
        //第1个参数是关联表的模型类，第2个参数是关联表的外键，第3个参数是主表的主键；
        //如果这2个在表中按规则定义，这里可以不写
        return $this->hasOne(Profile::class,'user_id','id');
    }

    //正向一对多
    public function book(){
        return $this->hasMany(Book::class,'user_id','id');
    }
    //正向多对多
    public function role(){
        //第2个参数是中间表名，第3个是中间表中对应的主表外键，第4个参数是中间表中对应的附表外键
        //如果是外键是按规范起的，可以不传
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id');
    }
}
