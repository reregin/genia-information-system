<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('organizer');
            $table->string('level');
            $table->string('location');
            $table->string('guidebook_url')->nullable();
            $table->json('categories');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('registration_start_date');
            $table->date('registration_end_date');
            $table->text('overview');
            $table->text('rules')->nullable();
            $table->decimal('first_prize', 15, 2)->nullable();
            $table->string('first_prize_description')->nullable();
            $table->decimal('second_prize', 15, 2)->nullable();
            $table->string('second_prize_description')->nullable();
            $table->decimal('third_prize', 15, 2)->nullable();
            $table->string('third_prize_description')->nullable();
            $table->text('additional_prizes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};