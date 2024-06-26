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
        Schema::create('comics', function (Blueprint $table) {
            // Creating my DB table
            $table->id();
            $table->string('title', 150);
            $table->text('description');
            $table->string('thumb', 255);
            $table->string('price', 50);
            $table->string('series', 50);
            $table->date('sale_date')->nullable();
            $table->string('type', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
