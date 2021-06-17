<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tinbai extends Model
{
    protected $guarded=[];
    public function tinbai()
    {
        return $this->belongsTo('App\danhmuc', 'loaitinid', 'id');
    }
}
