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
        Schema::create('product_comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->text('message');
            $table->smallInteger('rating');
            $table->softDeletes();
            $table->index('user_id', 'product_comment_user_idx');
            $table->foreign('user_id', 'product_comment_user_fk')->on('users')->references('id');
            $table->index('product_id', 'product_comment_product_idx');
            $table->foreign('product_id', 'product_comment_product_fk')->on('products')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_comments');
    }
};
