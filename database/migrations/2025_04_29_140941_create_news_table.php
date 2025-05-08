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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('caption');
            $table->longText('content');
            $table->enum('level', ['International', 'Regional', 'National']);
            $table->enum('competition', ['PKM', 'GELATIK', 'ON MIPA PT', 'COMPFEST']);
            $table->enum('status', ['Draft', 'Published'])->default('Draft');
            $table->string('thumbnail');
            $table->date('publish_date');
            $table->string('slug')->unique();
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
