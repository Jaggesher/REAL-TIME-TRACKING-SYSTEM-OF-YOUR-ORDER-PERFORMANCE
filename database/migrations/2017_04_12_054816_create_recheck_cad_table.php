<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecheckCadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recheck_cads', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->double('MarkerPcs', 15, 8)->default(0.0);
            $table->double('markerLengthInMeter', 15, 8)->default(0.0);
            $table->double('Piles', 15, 8)->default(0.0);
            $table->timestamps();
            $table->foreign('id')->references('id')->on('rechecks');

            $table->unique(['MarkerPcs']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recheck_cads');
    }
}