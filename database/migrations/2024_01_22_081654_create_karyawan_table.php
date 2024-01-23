<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_telepon');
            $table->longText('alamat');
            $table->string('jabatan');
            $table->string('divisi')->nullable();
            $table->string('email_pribadi')->nullable();
            $table->foreignId('users_id')->nullable();
            $table->foreignId('dapertemen_id');
            $table->timestamps();

            $table->foreign('users_id')->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('dapertemen_id')->references('id')
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
        Schema::dropIfExists('karyawan');
    }
}
