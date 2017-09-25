<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content'];
    public function categories(){
        return $this->belongsToMany('App\Category','category_posts','post_id','category_id');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function specialCategories(){
        return $this->belongsToMany('App\Category','special_category_posts','post_id','category_id');
    }

    public function sliders(){
        return $this->hasOne('App\Slider','post_id','id')->orderBy('updated_at','desc');
    }

    public function topPosts(){
        return $this->hasOne('App\TopPost','post_id','id')->orderBy('updated_at','desc');
    }


}
