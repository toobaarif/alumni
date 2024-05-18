<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'graduation_year', 'transcript_no', 'profile_picture', 'user_role', 'department_id', 'program_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Define relationships
     */
  

     public function department()
     {
         return $this->belongsTo(Department::class);
     }
 
     public function program()
     {
         return $this->belongsTo(Program::class);
     }

     // app/Models/User.php

public function basicInfo()
{
    return $this->hasOne(BasicInfo::class);
}
public function workExperiences()
{
    return $this->hasMany(WorkExperience::class);
}

public function educationDetails()
{
    return $this->hasOne(EducationDetail::class);
}
}
