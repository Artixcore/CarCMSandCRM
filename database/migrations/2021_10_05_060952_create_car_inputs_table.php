<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_inputs', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('car_inputs');
    }
}
