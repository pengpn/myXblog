<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    //可以被批量赋值的属性。
    protected $fillable = ['content'];


    /**多态关联
     * 获取所有拥有的 commentable 模型。
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    //一个评论属于一个文章
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    //一个评论属于一个用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
