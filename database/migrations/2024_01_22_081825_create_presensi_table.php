<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('karyawan_id');
            $table->date('tgl_presensi');
            $table->time('jam_in');
            $table->time('jam_out');
            $table->text('foto_in');
            $table->text('foto_out');
            $table->timestamps();

            $table->foreign('karyawan_id')->references('id')
            ->on('karyawan')
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
        Schema::dropIfExists('presensi');
    }
}
