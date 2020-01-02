<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('secretary');
            $table->string('captain');
            $table->string('treasurer');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('region');
            $table->string('zipcode');
            $table->string('kg1');
            $table->string('kg2');
            $table->string('kg3');
            $table->string('kg4');
            $table->string('kg5');
            $table->string('kg6');
            $table->string('kg7');
            $table->string('logo');
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
        Schema::dropIfExists('barangays');
    }
}
