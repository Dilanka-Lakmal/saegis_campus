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
    Schema::create('news_events', function (Blueprint $table) {
        $table->id();
        $table->enum('type', ['news', 'event'])->default('news');
        $table->string('title');
        $table->string('slug')->unique();
        $table->text('content');
        $table->string('image')->nullable();
        $table->timestamp('event_date')->nullable();
        $table->boolean('is_published')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_events');
    }
};
