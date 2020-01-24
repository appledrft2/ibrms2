<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudicialComplainantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judicial__complainants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('judicial_id')->unsigned()->index();
            $table->bigInteger('resident_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('judicial_id')
            ->references('id')->on('judicials')
            ->onDelete('cascade');
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
        Schema::dropIfExists('judicial__complainants');
    }
}
