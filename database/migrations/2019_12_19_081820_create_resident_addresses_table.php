<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident__addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('resident_id')->unsigned()->index();;
            $table->string('ownership');
            $table->string('houseno');
            $table->string('street');
            $table->string('purok');
            $table->string('barangay');
            $table->string('city');
            $table->string('province');
            $table->string('region');
            $table->string('zipcode');
            $table->string('contactno');
            $table->string('emailadd');
            $table->bigInteger('household_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('resident_id')
            ->references('id')->on('residents')
            ->onDelete('cascade');
            $table->foreign('household_id')
            ->references('id')->on('households')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resident_addresses');
    }
}
