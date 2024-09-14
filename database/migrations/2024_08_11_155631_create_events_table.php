<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('picture')->nullable();
            $table->date('event_date');
            $table->string('event_location');
            $table->enum('event_type', ['Conference', 'Workshop', 'Meetup', 'Other']);
            $table->enum('event_status', ['planned', 'ongoing', 'completed']);
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
        Schema::dropIfExists('events');
    }
}
