<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class SetAvailabilitys extends Model
{
   protected $table="set_availabilitys";
   protected $fillable=[
    'fitness_trainner_id', 'from_time','to_time','working_day','working_day_status','created_at','updated_at'];
}
