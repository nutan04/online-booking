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
        Schema::create('bus_details', function (Blueprint $table) {
            $table->id();
            $table->string('bus_no');
            $table->string('bus_driver_name');
            $table->string('driver_mob_no');
            $table->timestamp('bus_time');
            $table->foreignId('destination_id')->constrained('destinations'); // Assuming you have a destinations table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_details');
    }
};
