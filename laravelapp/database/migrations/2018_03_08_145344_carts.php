<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('userId',false,true);
             $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
             $table->double('totalPrice');
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
         Schema::dropIfExists('carts');
     }
}
