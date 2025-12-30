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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
        $table->string('title'); // property title
        $table->string('type'); // House, Apartment, Condo, etc
        $table->string('status'); // For Sale, For Rent
        $table->decimal('price', 12, 2)->nullable();
        $table->string('address');
        $table->integer('bedrooms')->nullable();
        $table->integer('bathrooms')->nullable();
        $table->integer('size')->nullable(); // square feet
        $table->string('image')->nullable(); // main image
        $table->string('agent_name')->nullable();
        $table->string('agent_company')->nullable();
        $table->string('agent_phone')->nullable();
        $table->string('agent_avatar')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
