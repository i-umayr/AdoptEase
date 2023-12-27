<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_information extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'income',
        'marital_status',
        'family_size',
        'occupation',
        'gender',
        'username',
        'user_id',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    
}
