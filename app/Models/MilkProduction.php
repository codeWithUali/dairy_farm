<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MilkProduction extends Model
{
    protected $fillable = [
        'animal_id',
        'milk',
        'datetime',
        'user_id',
    ];

    public function animal()
    {
        return $this->belongsTo(\App\Models\Animal::class, 'animal_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
