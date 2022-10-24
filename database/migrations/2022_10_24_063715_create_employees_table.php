<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id')->nullable();
            $table->string('emp_name',25)->nullable();
            $table->string('emp_email',50)->unique();
            $table->string('emp_password',255)->nullable();
            $table->string('slack',255)->nullable();
            $table->string('joining_date',25)->nullable();
            $table->string('exit_date',25)->nullable();
            $table->string('gender',10)->nullable();
            $table->text('address')->nullable();
            $table->string('skills',25)->nullable();
            $table->bigInteger('designation_id')->unsigned();
            $table->foreign('designation_id')->references('id')->on('designations');
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->string('mobile',25)->nullable();
            $table->string('hourly_rate',25)->nullable();
            $table->string('login',25)->nullable();
            $table->boolean('email_is_notify');
            $table->string('language',25)->nullable();
            $table->string('image',25)->nullable();


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
        Schema::dropIfExists('employees');
    }
}
