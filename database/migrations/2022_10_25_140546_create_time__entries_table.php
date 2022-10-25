<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time__entries', function (Blueprint $table) {
            $table->id();
            $table->string('duration',25)->nullable();
            $table->bigInteger('matter_id')->unsigned();
            $table->foreign('matter_id')->references('id')->on('matters');
            $table->bigInteger('activity_cat_id')->unsigned();
            $table->foreign('activity_cat_id')->references('id')->on('activity_categories');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('date',25)->nullable();
            $table->text('address')->nullable();
            $table->integer('rate')->nullable();
            $table->boolean('billable')->nullable();

            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('time__entries');
    }
}
