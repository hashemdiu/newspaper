<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];

    public function posts(){
        return $this->belongsToMany('App\Post','category_posts','category_id','post_id');
    }

    public function recentPosts(){
        return $this->belongsToMany('App\Post','category_posts','category_id','post_id')->orderBy('updated_at','desc')->limit(5);
    }

    public function specialPosts(){
        return $this->belongsToMany('App\Post','special_category_posts','category_id','post_id');
    }

    public function lastSpecialPosts(){
        return $this->belongsToMany('App\Post','special_category_posts','category_id','post_id')->orderBy('updated_at','desc')->limit(5);
    }
}
