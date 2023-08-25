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
        Schema::create('Comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('userId')->constrained('users', 'id');
            $table->foreignId('postId')->constrained('posts', 'id');
            $table->longText('content');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
