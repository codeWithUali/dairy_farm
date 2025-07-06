<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'age',
        'date_of_purchase',
        'purchase_price',
        'total_births',
        'last_birth_date',
        'next_expected_birth_date',
        'heat_date',
        'weight',
        'parent_id',
    ];

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
