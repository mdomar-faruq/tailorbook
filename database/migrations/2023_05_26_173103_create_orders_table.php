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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->integer("update_id")->nullable();
            $table->bigInteger("order_no");
            $table->date("order_date");
            $table->date("delivery_date");
            $table->string("customer_name");
            $table->bigInteger("customer_phone");
            $table->string("reff_no")->nullable();
            $table->unsignedBigInteger("punjabi_id");
            $table->bigInteger("punjabi_qty");
            $table->unsignedBigInteger("paijama_id")->nullable();;
            $table->bigInteger("paijama_qty")->nullable();;
            $table->bigInteger("kapor_price");
            $table->bigInteger("mojuri_price");
            $table->bigInteger("chain_price");
            $table->bigInteger("botam_price");
            $table->bigInteger("sub_total");
            $table->bigInteger("discount");
            $table->bigInteger("total");
            $table->bigInteger("paybale");
            $table->bigInteger("balance");
            $table->integer("status");
            $table->integer("valid");
            $table->timestamps();
            $table->foreign("punjabi_id")->references("id")->on("punjabi_items")->onDelete('cascade');
            $table->foreign("paijama_id")->references("id")->on("paijama_items")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
