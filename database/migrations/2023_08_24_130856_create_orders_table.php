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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->string('track_number')->nullable();
            $table->string('delivery')->nullable();
            $table->string('address');
            $table->smallInteger('status')->default(1);
            $table->bigInteger('price');
            $table->bigInteger('number');
            $table->index('user_id', 'order_user_idx');
            $table->foreign('user_id', 'order_user_fk')->on('users')->references('id');
            $table->index('product_id', 'order_product_idx');
            $table->foreign('product_id', 'order_product_fk')->on('products')->references('id');
            $table->timestamps();
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
