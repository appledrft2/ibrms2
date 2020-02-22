<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lupon1');
            $table->string('lupon2');
            $table->string('lupon3');
            $table->string('lupon4');
            $table->string('lupon5');
            $table->string('lupon6');
            $table->string('lupon7');
            $table->string('lupon8');
            $table->string('lupon9');
            $table->string('lupon10');
            $table->string('lupon11');
            $table->string('lupon12');
            $table->string('lupon13');
            $table->string('lupon14');
            $table->string('lupon15');
            $table->string('lupon16');
            $table->string('lupon17');
            $table->string('lupon18');
            $table->string('lupon19');
            $table->string('lupon20');
            $table->string('lupon21');
            $table->string('lupon22');
            $table->string('lupon23');
            $table->string('lupon24');
            $table->string('lupon25');
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
        Schema::dropIfExists('lupons');
    }
}
