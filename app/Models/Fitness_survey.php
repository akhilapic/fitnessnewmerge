<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fitness_survey extends Model
{
    use HasFactory;
    protected $table = "fitness_surveys";
    protected $fillable = ['gender','weight','weight_unit', 'height', 'height_unit','interest',
            'bodyparts_work', 'exercise', 'length_training', 'fitness_goal', 'diedt_impact'];
}
