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
            $table->string('lupon1')->nullable();
            $table->string('lupon2')->nullable();
            $table->string('lupon3')->nullable();
            $table->string('lupon4')->nullable();
            $table->string('lupon5')->nullable();
            $table->string('lupon6')->nullable();
            $table->string('lupon7')->nullable();
            $table->string('lupon8')->nullable();
            $table->string('lupon9')->nullable();
            $table->string('lupon10')->nullable();
            $table->string('lupon11')->nullable();
            $table->string('lupon12')->nullable();
            $table->string('lupon13')->nullable();
            $table->string('lupon14')->nullable();
            $table->string('lupon15')->nullable();
            $table->string('lupon16')->nullable();
            $table->string('lupon17')->nullable();
            $table->string('lupon18')->nullable();
            $table->string('lupon19')->nullable();
            $table->string('lupon20')->nullable();
            $table->string('lupon21')->nullable();
            $table->string('lupon22')->nullable();
            $table->string('lupon23')->nullable();
            $table->string('lupon24')->nullable();
            $table->string('lupon25')->nullable();
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
