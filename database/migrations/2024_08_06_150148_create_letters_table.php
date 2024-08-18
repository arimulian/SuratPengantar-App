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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('no');
            $table->string('sender');
            $table->string('receiver');
            $table->string('driver');
            $table->string('vehicle_number');
            $table->string('phone_number')->nullable();
            $table->string('type_item');
            $table->string('name_signature');
            $table->string('position');
            $table->string('signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
