<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_cart extends Model
{
    protected $table="product-carts";
    protected $primaryKey=array('cartId','productId');

    public function Cart()
    {
        return $this->belongsTo('App\Cart');
    }

    public function Product()
    {
        return $this->belongsTo('App\Product');
    }
}
