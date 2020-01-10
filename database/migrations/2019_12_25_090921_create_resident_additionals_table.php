<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentAdditionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident__additionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('resident_id')->unsigned()->index();;
            $table->string('educational_attainment');
            $table->string('employment');
            $table->string('dswd');
            $table->string('forpeace');
            $table->string('philhealthno');
            $table->string('phcategory');
            $table->string('pcb');
            $table->timestamps();

            $table->foreign('resident_id')
            ->references('id')->on('residents')
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
        Schema::dropIfExists('resident_additionals');
    }
}
