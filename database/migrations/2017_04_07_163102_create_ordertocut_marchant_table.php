<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdertocutMarchantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordertocut_marchants', function (Blueprint $table) {
            $table->increments('id');
            $table->double('FabricNeed', 15, 8)->default(0.0);
            $table->double('MockUpInput', 15, 8)->default(0.0);
            $table->double('MockUpOutput', 15, 8)->default(0.0);
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
        Schema::dropIfExists('ordertocut_marchants');
    }
}
