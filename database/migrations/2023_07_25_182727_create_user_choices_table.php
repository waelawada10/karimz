<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_choices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categories_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('variance_id')->nullable();
            $table->unsignedBigInteger('Variant_Item_id')->nullable();
      
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->foreign('item_id')->references('id')->on('item');
            $table->foreign('variance_id')->references('id')->on('variance');
            $table->foreign('Variant_Item_id')->references('id')->on('Variant_Item');
    
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('user_choices');
    }
}
