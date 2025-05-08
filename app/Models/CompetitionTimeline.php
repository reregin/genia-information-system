<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionTimeline extends Model
{
    use HasFactory;

    protected $fillable = ['competition_id', 'title', 'start_date', 'end_date', 'description'];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}