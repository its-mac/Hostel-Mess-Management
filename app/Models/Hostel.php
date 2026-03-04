<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    protected $fillable = [
        'name',
        'warden',
        'contact',
        'rooms',
        'capacity',
        'pincode',
        'address',
        'type',
    ];

    /**
     * Get the manager (warden) of the hostel.
     */
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
