<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudicialKp08sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judicial__kp08s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('judicial_id')->unsigned()->index();
            $table->date('hearing_date');
            $table->string('hearing_time');
            $table->string('kpformno');
            $table->timestamps();

            $table->foreign('judicial_id')
            ->references('id')->on('judicials')
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
        Schema::dropIfExists('judicial__kp08s');
    }
}
