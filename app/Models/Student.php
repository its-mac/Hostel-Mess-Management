<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'roll_number',
        'name',
        'email',
        'phone',
        'hostel_id',
        'room_number',
        'status',
        'check_in_date',
        'check_out_date',
        'emergency_contact',
        'guardian_name',
    ];

    /**
     * Get the hostel where the student is checked in.
     */
    public function hostel()
    {
        return $this->belongsTo(Hostel::class);
    }
}
