<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RulePolicy extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'effective_date',
        'status',
    ];

    protected $casts = [
        'effective_date' => 'date',
    ];
}
