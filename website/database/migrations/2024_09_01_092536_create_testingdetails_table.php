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
        Schema::create('testingdetails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('TrackingId', 12)->unique();
            $table->unsignedBigInteger('productid');
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('testingtypesid');
            $table->foreign('productid')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('testingtypesid')->references('id')->on('testingtypes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testingdetails');
    }
};
