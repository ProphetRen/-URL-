<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('Events', function (Blueprint $table) {
          $table->bigIncrements('id');//+
          $table->string('title');//+
          $table->timestamp('date')->nullable();
          $table->timestamp('endDate')->nullable();
          $table->string('description')->nullable();
          $table->string('price')->nullable();
          $table->string('address')->nullable();
          $table->string('phones')->nullable();
          $table->string('image')->nullable();
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
         //
     }
 }
