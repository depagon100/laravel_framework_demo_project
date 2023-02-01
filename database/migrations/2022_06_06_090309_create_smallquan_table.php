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
        Schema::create('smallquan', function (Blueprint $table) {
            $table->id();
            $table->integer('traineeID');
            $table->string('username');
            $table->string('permit');
            $table->date('dateIssued');
            $table->date('dateExpired');
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
        Schema::dropIfExists('smallquan');
    }
};
