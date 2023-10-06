<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horse extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'breed',
        'training_status',
        'medical_history',
    ];
}
