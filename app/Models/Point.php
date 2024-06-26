<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $fillable = [
        'points',
        'team_id',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
