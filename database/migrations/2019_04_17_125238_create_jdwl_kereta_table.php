<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJdwlKeretaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jdwl_kereta', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tujuan');
            $table->text('stasiun_keberangkatan');
            $table->time('waktu_keberangkatan');
            $table->time('waktu_sampai');
            $table->date('tanggal_keberangkatan');
            $table->double('Durasi_perjalanan',8,5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jdwl_kereta');
    }
}
