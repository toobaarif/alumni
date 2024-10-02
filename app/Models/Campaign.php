<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $table = 'campaign';
    protected $fillable = [
        'name',
        'timeline',
        'objectives',
        'why',
        'maxCollection',
        'minimum',
        'status',
        'coverPhoto',
        'picOneMain',
        'picTwo',
        'accountName',
        'bankName',
        'accountNumber',
        'accountName2',
        'bankName2',
        'accountNumber2',
        'approve'
    ];
}
