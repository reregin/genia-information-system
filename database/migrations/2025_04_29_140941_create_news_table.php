<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->enum('level', ['International', 'Regional', 'National']);
            $table->enum('competition', ['PKM', 'GELATIK', 'ON MIPA PT', 'COMPFEST']);
            $table->string('thumbnail');
            $table->date('publish_date');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
