<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cleint_id')->unsigned();
            $table->foreign('cleint_id')->references('id')->on('clients');
            $table->bigInteger('responsiable_soliciator')->unsigned();
            $table->foreign('responsiable_soliciator')->references('id')->on('clients');
            $table->bigInteger('originating_soliciator')->unsigned();
            $table->foreign('originating_soliciator')->references('id')->on('clients');
            $table->string('location')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('billing_type_id')->unsigned();
            $table->foreign('billing_type_id')->references('id')->on('billing_types');
            $table->string('status')->nullable();
            $table->string('open_date')->nullable();
            $table->string('close_date')->nullable();
            $table->string('pending_date')->nullable();
            $table->string('limit_date')->nullable();
            $table->string('rates')->nullable();
            $table->integer('parent_id')->default(1);


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
        Schema::dropIfExists('matters');
    }
}
