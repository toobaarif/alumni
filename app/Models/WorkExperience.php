<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WorkExperience extends Model
{
    // Your existing code
    protected $fillable = [
        'user_id', // Add user_id to the fillable array
        'job_title',
        'company',
        'start_date',
        'end_date',
        'job_description',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
