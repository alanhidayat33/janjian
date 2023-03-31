<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'agileteknik_access_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'agileteknik_access_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function agenda() : HasMany{
        return $this->hasMany(Agenda::class);
    }

    public function user_spare_time() : HasMany{
        return $this->hasMany(User_spare_time::class);
    }

    public function agenda_user() : HasMany{
        return $this->hasMany(Agenda_user::class);
    }
}
