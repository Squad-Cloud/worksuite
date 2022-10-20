<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('text_password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(
            array(
                   'firstname'   =>   'Super',
                   'lastname'   =>   'Admin',
                   'mobile'   =>   NULL,
                   'image'   =>   NULL,
                   'address'   =>   'ABC',
                   'email'   =>   'superadmin@admin.com',
                   'department_id'   =>   1,
                   'active'   =>   1,
                   'password' => Hash::make('admin2022')
            )
       );
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
