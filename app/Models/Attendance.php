<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'attendance',
        'user_id',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function date()
    {
        return $this->belongsTo(Date::class);
    }
}
