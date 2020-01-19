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
            $table->string('name')->nullable();
            $table->string('secretary')->nullable();
            $table->string('captain')->nullable();
            $table->string('treasurer')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('region')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('kg1')->nullable();
            $table->string('kg2')->nullable();
            $table->string('kg3')->nullable();
            $table->string('kg4')->nullable();
            $table->string('kg5')->nullable();
            $table->string('kg6')->nullable();
            $table->string('kg7')->nullable();
            $table->string('logo')->nullable();
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
