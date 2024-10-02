<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'amount',
        'campaign_id',
        'user_id',
        'approve',
        'transaction_pic',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    // Relation to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define any additional relationships or methods as needed
}
