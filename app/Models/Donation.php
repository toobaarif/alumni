<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'date',
        'transaction_picture',
        'purpose',
        'user_id',
    ];

    // Define any additional relationships or methods as needed
}
