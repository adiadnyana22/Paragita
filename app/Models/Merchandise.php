<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Merchandise extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'foto',
        'deskripsi',
        'harga',
        'link',
        'status',
        'label_id'
    ];

    public function label() : BelongsTo {
        return $this->belongsTo(Label::class, 'label_id', 'id');
    }
}
