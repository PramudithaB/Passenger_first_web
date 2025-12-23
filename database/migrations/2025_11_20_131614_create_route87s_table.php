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
        Schema::create('route87', function (Blueprint $table) {
            $table->id();
            $table->string('bus_number');
            $table->string('bus_route');
            $table->string('bus_type');
            $table->time('colombo')->nullable();
            $table->time('thelwatta')->nullable();
            $table->time('chilow')->nullable();
            $table->time('palawiya')->nullable();
            $table->time('puththalam')->nullable();
            $table->time('Anuradhapura')->nullable();
            $table->time('madawachchiya')->nullable();
            $table->time('mannar')->nullable();
            $table->time('vauniya')->nullable();
            $table->time('jaffna')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route87s');
    }
};
