<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data_forest', function (Blueprint $table) {
            $table->id();
            $table->string('tree');
            $table->float('soil_moisture');
            $table->float('temperature');
            $table->float('humidity');
            $table->float('gas');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_forest');
    }
};
