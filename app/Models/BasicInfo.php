<?php

// app/Models/BasicInfo.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'gender',
        'birthdate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

