<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crash_vehicle', function (Blueprint $table) {
            $table->timestamps();
            $table->primary(['vehicle_id', 'crash_id']);

            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('crash_id');

            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->foreign('crash_id')->references('id')->on('crashes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_crash');
    }
};
