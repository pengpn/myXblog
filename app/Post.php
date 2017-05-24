<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = [
          'title','description','slug','category_id','user_id','content','published_at','status','html_content',
    ];

    //一个文章只可以属于一个用户
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
