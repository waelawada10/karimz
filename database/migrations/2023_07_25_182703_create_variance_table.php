<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatevarianceTable extends Migration
{

    public function up()
    {
        Schema::create('variance', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
             

            $table->timestamps();

            

        });
    }


    public function down()
    {
        Schema::dropIfExists('variance');
    }
}
