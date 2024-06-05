<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Label extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    public function merchandise() : HasMany {
        return $this->hasMany(Merchandise::class, 'label_id', 'id');
    }
}
