<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServprovidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servproviders', function (Blueprint $table) {
        $table->id();
        $table->uuid('p_ID');
        $table->string('p_owner_name');
        $table->string('p_agent_name1')->nullable();
        $table->string('p_agent_name2')->nullable();
        $table->string('p_email1')->unique();
        $table->string('p_email2')->nullable();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->string('p_phone')->nullable();
        $table->string('p_mobile1');
        $table->string('p_mobile2')->nullable();
        $table->string('p_commercal_record_no')->nullable();
        $table->string('p_bank_name')->nullable();
        $table->string('p__bank_iban')->nullable();
        $table->string('experience_years')->nullable();
        $table->string('p_serv_type');
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
        Schema::dropIfExists('servproviders');
    }
}
