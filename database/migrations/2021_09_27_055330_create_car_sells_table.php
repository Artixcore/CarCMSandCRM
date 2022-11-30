<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_sells', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('images')->nullable();
            $table->string('model_name')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('ownership')->nullable();
            $table->string('mileage')->nullable();
            $table->string('vehicle_scheme')->nullable();
            $table->string('coe')->nullable();
            $table->string('omv')->nullable();
            $table->string('arf')->nullable();
            $table->string('minimum_parf')->nullable();
            $table->string('paper_value')->nullable();
            $table->string('road_tax_payable')->nullable();
            $table->string('coe_expiry_date')->nullable();
            $table->string('parf_expiry_date')->nullable();
            $table->string('road_tax_expiry_date')->nullable();
            $table->string('vehicle_code')->nullable();
            $table->string('manufacturing_year')->nullable();
            $table->string('primary_color')->nullable();
            $table->string('transmission')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('engine_capacity')->nullable();
            $table->string('power')->nullable();
            $table->string('vehicle_attachment')->nullable();
            $table->string('features')->nullable();
            $table->string('accessories')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('car_sells');
    }
}
