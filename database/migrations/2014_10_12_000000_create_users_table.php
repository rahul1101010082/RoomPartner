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
            $table->increments('id');
            $table->string('first_name', 100);
            $table->string('middle_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('company_name', 100)->nullable();
            $table->date('birth_date');
            $table->string('gender', 10)->nullable();
            $table->string('title', 20)->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('email', 150)->unique();
            $table->string('password', 60);
            $table->string('confirmation_code', 30)->nullable();
            $table->unsignedTinyInteger('confirmed')->default(0);
            $table->unsignedTinyInteger('is_active')->default(0);
            $table->rememberToken();
            $table->softDeletes();
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
