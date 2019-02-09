<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('name', 50);
            $table->string('mobile_number', 15);
            $table->string('facebook_profile_id', 30)->nullable();
            $table->string('linkedin_profile_id', 30)->nullable();
            $table->string('google_id', 30)->nullable();
            $table->string('avatar', 50)->default('user.jpg');
            $table->string('designation', 20)->nullable();
            $table->string('work_at', 50)->nullable();
            $table->mediumText('mailing_address')->nullable();
            $table->string('user_name', 10)->unique();
            $table->string('role', 10)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
