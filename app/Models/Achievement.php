<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'year_id',
        'foto',
    ];

    public function year() : BelongsTo {
        return $this->belongsTo(Year::class, 'year_id', 'id');
    }
}
