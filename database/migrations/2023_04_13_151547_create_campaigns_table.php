<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_name');
            $table->string('client_name');
            $table->string('setup_domicile');
            $table->string('setup_age_start');
            $table->string('setup_age_end')->nullable();
            $table->string('setup_gender');
            $table->string('setup_profession');
            $table->string('setup_martial_status');
            $table->string('setup_age_married');
            $table->string('setup_total_respondent');
            $table->string('setup_respondent_blacklist')->nullable();
            $table->string('message');
            $table->string('status')->nullable();
            $table->string('total_blasting')->nullable();
            $table->string('blasting_endtime')->nullable();
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
        Schema::dropIfExists('campaigns');
    }
}
