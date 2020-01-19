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
            $table->string('residentid')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('extension')->nullable();
            $table->string('dob')->nullable();
            $table->string('pob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->string('pwd')->nullable();
            $table->string('deceased')->nullable();
            $table->string('bloodtype')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('civilstatus')->nullable();
            $table->string('spouse')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('img')->nullable();
            $table->bigInteger('father_id')->unsigned()->index()->nullable();
            $table->bigInteger('mother_id')->unsigned()->index()->nullable();
            $table->timestamps();

            $table->foreign('father_id')
            ->references('id')->on('residents')
            ->onDelete('cascade');
            $table->foreign('mother_id')
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
        Schema::dropIfExists('residents');
    }
}
