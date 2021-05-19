<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesionals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name','50');
            $table->string('email','100')->unique();
            $table->timestamp('email_verified_at','6')->nullable();
            $table->string('password','100');
            $table->string('telephone','10');
            $table->string('country','20');
            $table->boolean('accept_terms')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('profesionals');
    }
}
