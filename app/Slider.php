<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['post_id'];
    public function posts(){
        return $this->belongsTo('App\Post','id','post_id');
    }
}
