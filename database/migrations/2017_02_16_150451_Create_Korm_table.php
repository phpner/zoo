<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint ;

class CreateKormtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Korm',function (Blueprint $table){
           $table->primary('id');
           $table->string('title');
           $table->text('description');
           $table->integer('img_id');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Korm');
    }
}
