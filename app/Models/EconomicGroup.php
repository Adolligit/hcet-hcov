<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EconomicGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    public function employee(): HasMany {
        return $this->hasMany(Corporation::class);
    }
}
