<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('products', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('adminId')->unsigned()->nullable()->index();
             $table->string('name');
             $table->string('key');
             $table->integer('amount');
             $table->double('price');
             $table->mediumText('description');
             $table->foreign('adminId')->references('id')->on('admins')->onDelete('cascade');
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
         Schema::dropIfExists('products');
     }
}
