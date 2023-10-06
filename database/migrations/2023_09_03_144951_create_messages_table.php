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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('first_user_id');
            $table->unsignedBigInteger('second_user_id');
            $table->text('message');
            $table->timestamps();
            $table->softDeletes();
            $table->index('first_user_id', 'message_first_user_idx');
            $table->foreign('first_user_id', 'message_first_user_fk')->on('users')->references('id');

            $table->index('second_user_id', 'message_second_user_idx');
            $table->foreign('second_user_id', 'message_second_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
