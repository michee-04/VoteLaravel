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
        Schema::create('votes', function (Blueprint $table) {
            $table->id('vote_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('user_id')->references('user_id')->on('users')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('candidate_id')->references('candidate_id')->on('candidates')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('nbvotes')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
