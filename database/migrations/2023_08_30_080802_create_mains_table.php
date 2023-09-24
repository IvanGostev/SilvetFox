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
        Schema::create('mains', function (Blueprint $table) {
            $table->id();
            $table->double('rate_dollars');
            $table->text('score');
//            $table->double('deposit_store');
            $table->text('terms_of_service');
//            $table->text('information');
            $table->text('rules');
            $table->text('escrow');
            $table->text('privacy_policy');
            $table->double('advertisement');
//            $table->string('address');
//            $table->string('email');
//            $table->string('phone');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mains');
    }
};
