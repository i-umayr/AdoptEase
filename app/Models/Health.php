<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;

    protected $fillable = [
        't_date',
        'ailment',
        'd_date',
        'user_id',
        'status',
    ];

    public static $rules = [
        't_date' => 'required|date|after_or_equal:Diagnosed Date',
    ];
    
    public function orphanHealth()
    {
        $this->belongsTo(User::class);
    }
}
