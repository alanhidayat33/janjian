<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class agenda_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'agenda_id',
        'user_id'
    ];

    public function agenda(): belongsTo{
        return $this->belongsTo(Agenda::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
