<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    protected $guarded=[];
    public function tinbai()
    {
        return $this->hasMany('App\tinbai','loaitinid','id');
    }
}
