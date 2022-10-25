<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense__entries', function (Blueprint $table) {
            $table->id();
            $table->string('expense_type',25)->nullable();
            $table->bigInteger('expense_id')->unsigned();
            $table->foreign('expense_id')->references('id')->on('expense__categories');
            $table->bigInteger('matter_id')->unsigned();
            $table->foreign('matter_id')->references('id')->on('matters');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('amount');
            $table->string('reference',25)->nullable();
            $table->string('date',25)->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('expense__entries');
    }
}
