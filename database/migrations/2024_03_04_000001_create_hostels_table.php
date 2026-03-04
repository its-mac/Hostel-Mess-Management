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
        Schema::create('hostels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('warden')->nullable();
            $table->string('contact')->nullable();
            $table->integer('rooms')->default(0);
            $table->integer('capacity')->default(0);
            $table->string('pincode')->nullable();
            $table->text('address')->nullable();
            $table->enum('type', ['boys', 'girls', 'coed'])->default('boys');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostels');
    }
};
