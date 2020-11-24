<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButtonMouldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('button_moulds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('letering');
            $table->string('dimention');
            $table->string('color');  
            $table->string('buyers');
            $table->text('image'); 
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
        Schema::dropIfExists('button_moulds');
    }
}
