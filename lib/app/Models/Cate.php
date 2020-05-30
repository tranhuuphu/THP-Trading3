<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    //
    protected $table = 'cate2';
    protected $primaryKey = 'cate_id';
    protected $guarded = [];

    // public function Post_THP(){
    // 	return $this->hasMany('App\Models\Post', 'post_cate_id', 'cate_id');
    // }
}
