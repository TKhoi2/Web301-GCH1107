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
        Schema::create('Likes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('userId')->constrained('users', 'id')->onDelete('cascade');;
            $table->foreignId('postId')->constrained('posts', 'id')->onDelete('cascade');;
            $table->unique(['userId', 'postId']);
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
