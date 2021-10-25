<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workoutPlans extends Model
{
    

    protected $table = 'workout_plans';

    protected $fillable = [
         'name', 'category', 'description', 'upload_video', 'type', 'level', 'frequency', 'total_week', 'calories_burn', 'duration', 'status',
    ];

    
}
