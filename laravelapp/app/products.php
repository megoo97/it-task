<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function product_cart()
    {
        return $this->hasMany('App\product_Cart');
    }

    public function admin()
    {
        return $this->belongsTo("App\Admin");
    }
}
