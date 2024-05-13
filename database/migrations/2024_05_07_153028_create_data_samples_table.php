<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_samples', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('hari');
            $table->time('waktu');
            $table->string('pohon');
            $table->integer('suhu');
            $table->integer('kelembapan');
            $table->integer('soilMoisture');
            $table->integer('soilQuality');
            $table->integer('gasValue');
            $table->integer('gasLevel');
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
        Schema::dropIfExists('data_samples');
    }
}
