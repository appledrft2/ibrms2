<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuroksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puroks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('purok_id_num');
            $table->string('prk_president');
            $table->string('prk_name');
            $table->string('prk_vice_pres');
            $table->string('prk_address');
            $table->string('prk_secretary');
            $table->string('prk_map')->nullable();
            $table->string('prk_treasurer');
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
        Schema::dropIfExists('puroks');
    }
}
