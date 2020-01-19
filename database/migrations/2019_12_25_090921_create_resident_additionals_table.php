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
            $table->string('educational_attainment')->nullable();
            $table->string('employment')->nullable();
            $table->string('dswd')->nullable();
            $table->string('forpeace')->nullable();
            $table->string('philhealthno')->nullable();
            $table->string('phcategory')->nullable();
            $table->string('pcb')->nullable();
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
