<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'competition_id', 'name', 'role', 'email', 
        'phone', 'whatsapp', 'website'
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}