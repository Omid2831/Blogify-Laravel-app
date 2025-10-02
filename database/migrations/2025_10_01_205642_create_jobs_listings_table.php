<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jobs-listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('location');
            $table->string('type'); // Full-time, Part-time, Contract
            $table->text('description');
            $table->json('requirements');
            $table->string('apply_link');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jobs-listings');
    }
};