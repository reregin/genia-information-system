<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionFaq extends Model
{
    use HasFactory;

    protected $fillable = ['competition_id', 'question', 'answer'];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}