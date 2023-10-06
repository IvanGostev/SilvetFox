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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('img')->nullable();
            $table->string('banner')->nullable();
            $table->text('description')->nullable();
            $table->smallInteger('status')->default(0);
            $table->smallInteger('active')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->index('category_id', 'stores_category_idx');
            $table->foreign('category_id', 'stores_user_fk')->on('product_categories')->references('id');
            $table->index('user_id', 'store_user_idx');
            $table->foreign('user_id', 'store_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
