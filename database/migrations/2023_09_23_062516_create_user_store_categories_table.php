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
        Schema::create('user_store_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->softDeletes();
            $table->index('category_id', 'usc_category_idx');
            $table->foreign('category_id', 'usc_category_fk')->on('product_categories')->references('id');
            $table->index('user_id', 'usc_user_idx');
            $table->foreign('user_id', 'usc_user_fk')->on('users')->references('id');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_store_categories');
    }
};
