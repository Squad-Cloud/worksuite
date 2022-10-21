<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unique()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('company_name',50);
            $table->string('company_email',50);
            $table->string('company_phone',15);
            $table->text('company_logo');
            $table->string('company_website',25);
            $table->text('company_address');
            $table->string('default_currency',10)->default('dollar');
            $table->string('default_timezone',25);
            $table->string('date_formate',25)->nullable();
            $table->string('time_formate',25)->nullable();
            $table->string('work_start_from',25);
            $table->string('language',10)->default('en');
            $table->string('latitude',25)->nullable();
            $table->string('longitude',25)->nullable();
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
        Schema::dropIfExists('company_details');
    }
}
