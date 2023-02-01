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
        Schema::create('summary2', function (Blueprint $table) {
            $table->id();
            $table->string('Fuel_Burning_Equipment');
            $table->string('Rated_Capacity');
            $table->string('Location');
            $table->string('Fuel_Used');
            $table->string('Quantity_Consumed_for_the_quarter');
            $table->string('Unit_Consumed_for_the_quarter');
            $table->string('no_of_hours_of_operation_for_the_quarter');
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
        Schema::dropIfExists('summary2');
    }
};
