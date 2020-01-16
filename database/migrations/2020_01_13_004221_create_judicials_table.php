<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judicials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('resident_id')->unsigned()->index();
            $table->string('caseno');
            $table->string('kpformno');
            $table->string('details');
            $table->string('status');
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
        Schema::dropIfExists('judicials');
    }
}
