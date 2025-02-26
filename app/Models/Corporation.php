<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Corporation extends Model
{
    /** @use HasFactory<\Database\Factories\CorporationFactory> */
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'cnpj',
        'economicgroup_id'
    ];

    public function economicGroup(): BelongsTo {
        return $this->belongsTo(EconomicGroup::class);
    }

    public function employees(): BelongsToMany {
        return $this->belongsToMany(Employee::class);
    } 
}
