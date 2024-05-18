<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class EducationDetail extends Model
{
    protected $fillable = [
        'user_id', 'institution', 'degree', 'field_of_study', 'graduation_year', 'gpa', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
