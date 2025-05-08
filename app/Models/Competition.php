<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'logo', 'organizer', 'level', 'location', 'guidebook_url',
        'categories', 'start_date', 'end_date', 'registration_start_date',
        'registration_end_date', 'overview', 'rules', 'first_prize',
        'first_prize_description', 'second_prize', 'second_prize_description',
        'third_prize', 'third_prize_description', 'additional_prizes'
    ];

    protected $casts = [
        'categories' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'registration_start_date' => 'date',
        'registration_end_date' => 'date',
        'first_prize' => 'decimal:2',
        'second_prize' => 'decimal:2',
        'third_prize' => 'decimal:2',
    ];

    public function timelines()
    {
        return $this->hasMany(CompetitionTimeline::class);
    }

    public function faqs()
    {
        return $this->hasMany(CompetitionFaq::class);
    }

    public function contacts()
    {
        return $this->hasMany(CompetitionContact::class);
    }
}