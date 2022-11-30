<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('owner_id_type');
            $table->string('owner_id_no');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');

            $table->string('date_of_birth');
            $table->string('license_pass_date');
            $table->string('gender');
            $table->string('marital_status');

            $table->string('vehicle_plate_no');
            $table->string('insurance_coverage');
            $table->string('renewal_ndc');
            $table->string('current_insurance');
            $table->string('current_renewal_premium');

            $table->string('driver_name');
            $table->string('driver_id_no');
            $table->string('driver_date_of_birth');
            $table->string('driver_license_pass_date');
            $table->string('driver_gender');
            
            $table->string('driver_marital_status');
            $table->string('driver_occupation');
            $table->string('driver_nationality');
            $table->string('driver_relationship');
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
        Schema::dropIfExists('insurances');
    }
}
