<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->bigIncrements('client_id');
            $table->string('Property_name');
            $table->string('Property_size');
            $table->string('Property_status');
            $table->string('Address');
            $table->string('Price');
            $table->string('Type');
            $table->string('Furnished');
            $table->string('Bhk');
            $table->float('Deposit');
            $table->string('Bedroom');
            $table->string('Bathroom');
            $table->string('Kitchen');
            $table->string('Balcony');
            $table->string('Community_hall');
            $table->string('School');
            $table->string('Elevators');
            $table->string('Electricity');
            $table->string('Garden');
            $table->string('Water_supply');
            $table->string('Swimming_pool');
            $table->string('Restaurant');
            $table->string('Security');
            $table->string('Cctv_security');
            $table->string('Wifi_connection');
            $table->string('Hospital');
            $table->string('Total_floors');
            $table->string('Room_floors');
            $table->string('Parking_area');
            $table->string('Loan');
            $table->string('Image01');
            $table->string('Image02');
            $table->string('Image03');
            $table->string('Image04');
            $table->string('Image05');
            $table->string('Image06');
            $table->string('Image07');
            $table->string('Image08');
            $table->string('Video_url');
            $table->string('Video_name');
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
        Schema::dropIfExists('property');
    }
};
