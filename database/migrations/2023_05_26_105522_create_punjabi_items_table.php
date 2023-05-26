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
        Schema::create('punjabi_items', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('update_id')->nullable();
            $table->string('title')->unique();
            $table->bigInteger('rate');
            $table->integer("status");
            $table->integer("valid");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punjabi_items');
    }
};
