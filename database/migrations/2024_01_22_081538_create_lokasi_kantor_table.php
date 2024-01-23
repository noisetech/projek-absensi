<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiKantorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_kantor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dapertemen_id');
            $table->string('longitude');
            $table->string('latitude');
            $table->timestamps();

            $table->foreign('dapertemen_id')
                ->references('id')
                ->on('dapertemen')
                ->onUpdate('cascade')
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
        Schema::dropIfExists('lokasi_kantor');
    }
}
