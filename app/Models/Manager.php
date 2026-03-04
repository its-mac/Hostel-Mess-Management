<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'hostel_id',
        'status',
        'qualification',
        'experience',
        'address',
    ];

    /**
     * Get the hostel managed by this manager.
     */
    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}
