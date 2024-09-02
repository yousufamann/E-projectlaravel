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
        Schema::create('testingtypes', function (Blueprint $table) {
            $table->engine=='InnoDB';
            $table->id();
            $table->string('TestingTypes');
            $table->string('TestingTypesImage')->nullable();
            $table->string('TestingDescription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testingtypes');
    }
};
