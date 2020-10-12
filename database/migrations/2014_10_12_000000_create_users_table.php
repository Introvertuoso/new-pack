<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    // TODO: Do a full revision of all the tables, attributes and constraints
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
//            TODO: Add a verification step to activate an account
//            TODO: where the admin must set a user's role first and then the account becomes verified
//            TODO: Same goes for title?
            $table->unsignedBigInteger('role_id')->nullable()->default('7');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();

            $table->string('title')->nullable();
            $table
                ->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
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
