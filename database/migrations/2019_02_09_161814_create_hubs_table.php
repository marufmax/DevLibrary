<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hubs', function (Blueprint $table) {
            $table->increments('hub_id');
            $table->mediumText('address');
            $table->string('area');
            $table->string('map_link');
            $table->unsignedInteger('contact_person_id');
            $table->foreign('contact_person_id')->references('user_id')->on('users');
            $table->string('contact_number');
            $table->enum('close_days', ['fri', 'sat', 'sun', 'mon', 'tue', 'wed', 'thu']); // for simplicity, or we can create another pivot table
            $table->datetime('open_time_from'); // Office hour
            $table->datetime('open_time_to');  // Office hour
            $table->enum('status', ['open', 'closed']);
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
        Schema::dropIfExists('hubs');
    }
}
