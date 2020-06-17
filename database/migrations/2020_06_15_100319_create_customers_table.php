<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->uuid('c_ID');
        $table->string('c_name');
        $table->string('c_phone');
        $table->string('c_email')->unique();
        $table->string('c_nationalID')->nullable();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->string('c_city')->nullable();
        $table->string('c_bdate')->nullable();
        $table->string('c_gender')->nullable();
        $table->string('c_address')->nullable();
        $table->string('p_bank_name')->nullable();
        $table->string('c_status')->nullable();
        $table->string('c_nID_document')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
