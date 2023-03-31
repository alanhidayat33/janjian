<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'location',
        'start_date',
        'end_date',
        'generated_start_date',
        'generated_end_date'
    ];

    public function user(): belongsTo{
        return $this->belongsTo(User::class);
    }

    public function agenda_user() : HasMany{
        return $this->hasMany(Agenda_user::class);
    }
}
