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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('entry_date');
            $table->string('respondent_code');
            $table->string('respondent_name');
            $table->string('province');
            $table->string('district');
            $table->string('districts');
            $table->string('ward');
            $table->string('address');
            $table->string('phone');
            $table->string('gender');
            $table->string('age');
            $table->string('marital_status');
            $table->string('family_members');
            $table->string('education');
            $table->string('occupation');
            $table->string('expense');
            $table->string('source_water');
            $table->string('source_energy');
            $table->string('filename');
            $table->string('status');
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
