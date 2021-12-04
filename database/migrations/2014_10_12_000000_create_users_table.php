<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('description')->nullable();
            $table->string('name');
            $table->string('about')->nullable();
            $table->string('title_about')->nullable();
            $table->string('title_services')->nullable();
            $table->string('title_skills')->nullable();
            $table->string('title_profskills')->nullable();
            $table->string('image_about')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('title_job')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tel')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('github')->nullable();
            $table->string('dribbble')->nullable();
            $table->text('excerpt')->nullable();
            
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
