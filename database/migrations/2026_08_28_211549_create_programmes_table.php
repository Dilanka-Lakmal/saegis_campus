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
    Schema::create('programmes', function (Blueprint $table) {
        $table->id();
        $table->foreignId('faculty_id')->constrained()->onDelete('cascade');
        $table->foreignId('programme_category_id')->constrained()->onDelete('cascade');
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('duration')->nullable(); // e.g. 3 Years, 1 Year
        $table->string('level')->nullable(); // e.g. BSc (Hons), MSc
        $table->text('overview')->nullable();
        $table->text('entry_requirements')->nullable();
        $table->string('image')->nullable();
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programmes');
    }
};
