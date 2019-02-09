<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('book_name');
            $table->string('author_name');
            $table->string('published_at');
            $table->unsignedInteger('owener_id');
            $table->foreign('owener_id')->references('user_id')->on('users');
            $table->string('image')->default('book.jpg');
            $table->enum('is_available', ['yes', 'no']);
            $table->unsignedInteger('hub_id');
            $table->foreign('hub_id')->references('hub_id')->on('hubs');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('status');
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
        Schema::dropIfExists('books');
    }
}
