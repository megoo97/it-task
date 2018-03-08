<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductCarts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('product-carts', function (Blueprint $table) {
             //$table->increments('id');
             $table->integer('cartId',false,true);
             $table->integer('productId',false,true);
             $table->foreign('cartId')->references('id')->on('carts')->onDelete('cascade');
             $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');
             $table->primary(array("cartId","productId"));
             $table->timestamps();
         });
     }
 
     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::dropIfExists('product-carts');
     }
}
