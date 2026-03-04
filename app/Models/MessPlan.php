<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessPlan extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'duration_days',
    ];
}
