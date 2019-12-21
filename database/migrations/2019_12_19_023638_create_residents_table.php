<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('residentid');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('extension');
            $table->string('dob');
            $table->string('pob');
            $table->string('nationality');
            $table->string('religion');
            $table->string('gender');
            $table->string('pwd');
            $table->string('deceased');
            $table->string('bloodtype');
            $table->string('height');
            $table->string('weight');
            $table->string('civilstatus');
            $table->string('spouse')->nullable();
            $table->string('father');
            $table->string('mother');



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
        Schema::dropIfExists('residents');
    }
}
