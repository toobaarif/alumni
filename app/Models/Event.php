<?php

// app/Models/Event.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'eventId',
        'name',
        'description',
        'picture',
        'event_date',
        'event_location',
        'event_type',
        'event_status',
    ];
}

