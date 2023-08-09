<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariantItemTable extends Migration
{

    public function up()
    {
        Schema::create('Variant_Item', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('variance_id');

            $table->timestamps();

            
            $table->foreign('variance_id')->references('id')->on('variance')->onDelete('cascade');
            
        });
    }


    public function down()
    {
        Schema::dropIfExists('Variant_Item');
    }
}
