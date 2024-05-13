<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('log_tables', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('hari');
            $table->time('waktu');
            $table->string('pelanggan');
            $table->integer('suhu');
            $table->integer('kelembapan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_tables');
    }
};
