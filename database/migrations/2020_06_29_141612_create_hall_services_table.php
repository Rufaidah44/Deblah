<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHallServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hall_services', function (Blueprint $table) {
            $table->id();
            $table->uuid('s_ID')->unique();
            $table->string('p_ID');
            $table->string('h_status');
            $table->string('h_name');
            $table->string('h_type');
            $table->string('h_age');
            $table->string('h_city');
            $table->string('h_address');
            $table->string('h_location')->nullable();
            $table->string('h_national_address')->nullable();
            $table->boolean('female_hold')->nullable();
            $table->boolean('male_hold')->nullable();
            $table->integer('female_no')->nullable();
            $table->integer('male_no')->nullable();
            $table->boolean('female_hosting_food')->nullable();
            $table->boolean('male_hosting_food')->nullable();
            $table->boolean('female_denner')->nullable();
            $table->boolean('male_denner')->nullable();
            $table->boolean('female_waiters')->nullable();
            $table->boolean('male_waiters')->nullable();
            $table->boolean('female_cleaners')->nullable();
            $table->boolean('male_cleaners')->nullable();
            $table->boolean('female_abayah_serve')->nullable();
            $table->boolean('kosha')->nullable();
            $table->boolean('speakers')->nullable();
            $table->boolean('female_decoration')->nullable();
            $table->boolean('vip_room')->nullable();
            $table->string('female_services_room')->nullable();
            $table->string('hall_photos');
            $table->timestamps();

            $table->index('p_ID');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hall_services');
    }
}
