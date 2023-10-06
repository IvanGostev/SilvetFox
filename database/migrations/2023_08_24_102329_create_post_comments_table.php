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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');
            $table->text('message');
            $table->softDeletes();
            $table->index('user_id', 'post_comment_user_idx');
            $table->foreign('user_id', 'post_comment_user_fk')->on('users')->references('id');
            $table->index('post_id', 'post_comment_post_idx');
            $table->foreign('post_id', 'post_comment_post_fk')->on('posts')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};
