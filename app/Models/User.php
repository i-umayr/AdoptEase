<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'user_type',
        'name',
    ];
    public function User_access()
    {
        return $this->hasOne(User_information::class);
    }

    public function orphan_access()
    {
        return $this->hasOne(Orphan_information::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function orphan_health()
    {
        return $this->hasMany(Health::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function adoption()
    {
        return $this->hasMany(Adoption::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
