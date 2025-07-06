<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalMedication extends Model
{
    protected $fillable = [
        'animal_id',
        'user_id',
        'type',
        'comment',
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
