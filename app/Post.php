<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //软删除 trait 形状
    use SoftDeletes;

    /**
     * 需要被转换成日期的属性。
     *
     * @var array
     */
    protected $dates = ['deleted_at','published_at'];

    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = [
          'title','description','slug','category_id','user_id','content','published_at','status','html_content',
    ];

    const selectArrayWithOutContent = [
        'id',
        'user_id',
        'category_id',
        'title',
        'slug',
        'view_count',
        'description',
        'updated_at',
        'created_at',
        'status'
    ];

    //一个文章只可以属于一个用户 获取这篇文章的用户模型。
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //一个文章有多个评论 获取所有文章的评论。
    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    //获取该文章下所属的分类模型。
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
