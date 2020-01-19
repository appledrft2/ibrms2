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
            $table->string('ownership')->nullable();
            $table->string('houseno')->nullable();
            $table->string('street')->nullable();
            $table->bigInteger('purok_id')->unsigned()->index();
            $table->string('barangay')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('region')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('contactno')->nullable();
            $table->string('emailadd')->nullable();
            $table->bigInteger('household_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('purok_id')
            ->references('id')->on('puroks');
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
