<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'level',
        'competition',
        'thumbnail',
        'publish_date',
        'slug',
    ];

    protected $casts = [
        'publish_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeLevel($query, $level)
    {
        return $query->where('level', $level);
    }

    public function scopeCompetition($query, $competition)
    {
        return $query->where('competition', $competition);
    }
}
