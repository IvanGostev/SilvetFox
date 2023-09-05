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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('countries');
            $table->string('img');
            $table->string('video');
            $table->unsignedSmallInteger('status');
            $table->smallInteger('active')->default(0);
            $table->bigInteger('price');
            $table->bigInteger('dollars');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('store_id');
            $table->timestamps();
            $table->index('category_id', 'product_category_idx');
            $table->foreign('category_id', 'product_user_fk')->on('product_categories')->references('id');
            $table->index('store_id', 'product_store_idx');
            $table->foreign('store_id', 'product_store_fk')->on('stores')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
