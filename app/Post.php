<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);

        //  return $this->hasOne(Category::class,'category_id','id');

    }
    //protected $table = 'tablename';
    //
}
