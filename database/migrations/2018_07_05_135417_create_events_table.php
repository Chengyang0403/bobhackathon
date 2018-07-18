<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('event_name', 100);
            $table->unsignedInteger('user_id')->index();
            $table->string('genre', 60);
            $table->text('date');
            $table->text('time');
            $table->string('place', 30);
            $table->integer('capacity');
            $table->text('comment');
            $table->text('due');
            
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
