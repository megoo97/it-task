<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "carts";
    protected $primaryKey=array("userId","productId");

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product_cart()
    {
        return $this->hasMany('App\Product_cart');
    }
    
}
