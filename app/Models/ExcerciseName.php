<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ExcerciseName extends Model
{
   protected $table="no_of_days";
   protected $fillable=[
    'workout_plans_id', 'exercise_name'];
}
