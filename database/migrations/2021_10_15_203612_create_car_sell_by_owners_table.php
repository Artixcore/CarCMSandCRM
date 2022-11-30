<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarSellByOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_sell_by_owners', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('vehicle_plate_no');
            $table->string('mileage');
            $table->string('ask_price');
            $table->string('transmission');
            $table->string('purchase_from');
            $table->string('accident_free');
            $table->string('condition');
            $table->string('owner_id_type');
            $table->string('owner_id_no');
            $table->string('owner_name');
            $table->string('owner_mobile_no');
            $table->string('owner_email');
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
        Schema::dropIfExists('car_sell_by_owners');
    }
}
