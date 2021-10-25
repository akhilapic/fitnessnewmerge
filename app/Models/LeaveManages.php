<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class LeaveManages extends Model
{
   protected $table="manage_leaves";
   protected $fillable=['user_id','date','status'];
  
}
