<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'full_name',
        'age',
        'cpf',
        'user_id',
        'role_id'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function role(): BelongsTo {
        return $this->belongsTo(Role::class);
    }

    public function corporations(): BelongsToMany {
        return $this->belongsToMany(Corporation::class);
    }
}
