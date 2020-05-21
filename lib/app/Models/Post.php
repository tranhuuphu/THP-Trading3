<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'post';
    protected $primaryKey = 'post_id';
    protected $guarded = [];
    public function Cate_THP(){
    	return $this->belongsTo('App\Models\Cate', 'cate_id', 'post_cate_id');
    }
}
