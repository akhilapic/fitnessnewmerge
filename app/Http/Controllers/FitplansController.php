<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\workoutPlans;
use App\Models\User;
use App\Models\ExcerciseDetails;
use App\Models\ExcerciseName;

use DB;
class FitplansController extends Controller
{
    public function index()
    {
           $workout_category = DB::table('workout_category')->get();
        $workoutplansfitness = workoutPlans::join('users', 'users.id', '=', 'workout_plans.trainer_id')
                ->where("users.status","2")
              ->get(['workout_plans.*', 'users.id as  fitness_trainers_id' ,'users.status','users.name as fitness_trainers_name']);
            $workoutfrequency = workoutPlans::all();
            
        return view('fit-plans',compact('workoutplansfitness','workoutfrequency','workout_category'));
    }

    public function getdata_fit_plans()
    {
         $workoutplansfitness = workoutPlans::join('users', 'users.id', '=', 'workout_plans.trainer_id')
                ->where("users.status","2")
              ->get(['workout_plans.*', 'users.id','users.status','users.name as fitness_trainers_name']);
            $workoutfrequency = workoutPlans::all();

            $result = array("status"=>true,"workoutfrequency"=>$workoutfrequency,'workoutplansfitness'=>$workoutplansfitness);
            echo json_encode($result);
    }

    public function search_fitplans(Request $request)
    {
        $search = $request->search_fitplans;


      //  workout plan, exercise (of a workout) or trainer name
       // $search ="Ultimate Abs";

        $sql ='';
        $sql .='select workout_plans.*,users.id,users.status,users.name as fitness_trainers_name ,no_of_days.id,exercise_details.exercise_name from workout_plans join users on users.id = workout_plans.trainer_id join no_of_days on no_of_days.workout_plans_id = workout_plans.id join exercise_details on exercise_details.exercise_name_id = no_of_days.id where users.status=2';

        if(!empty($search))
        {
            $sql .=" and workout_plans.name LIKE '%".$search."%' or users.name LIKE '%".$search."%' or exercise_details.exercise_name LIKE '%".$search."%'  ";
            // echo $sql;
            // exit;
           $workoutplansfitness = DB::select($sql);
        }
        else
        {
             $workoutplansfitness = DB::select($sql);
        }
            $workoutfrequency = workoutPlans::all();

            $result = array("status"=>true,"workoutfrequency"=>$workoutfrequency,'workoutplansfitness'=>$workoutplansfitness);
           
            echo json_encode($result);
       
    }

    public function filter_fitplans(Request $request)
    {
      //  dd($request->filters);
        $category="";
        $gender = "";
        $level = "";
        $frequency = "";
        $type = "";
        $Planlength = "";
        $c="";
        $g="";
        $l="";
        $f="";
        $t ="";
        $p="";
        if(!empty($request->filters))
        {
             $arr = explode(",", $request->filters);
            foreach($arr as $val)
            {
                 $arr2 = explode("&&", $val);

                if($arr2[1]=="type")
                {
                    $category .= "'". $arr2[0] ."',"; 
                }
                 if($arr2[1]=="gender")
                {
                    $gender .= "'". $arr2[0] ."',"; 
                }
                 if($arr2[1]=="level")
                {
                    $level .= "'". $arr2[0] ."',"; 
                }
                 if($arr2[1]=="Workoutfrequency")
                {
                    $frequency .= "'". $arr2[0] ."',"; 
                }
                  if($arr2[1]=="location")
                {
                    $type .= "'". $arr2[0] ."',"; 
                }
                 if($arr2[1]=="Planlength")
                {
                    $Planlength .= $arr2[0] .","; 
                }
            }

            if(!empty($category))
            {
                $c =rtrim($category, ",");
            }
            if(!empty($gender))
            {
                 $g=rtrim($gender, ",");
            }
            if(!empty($level))
            {
                $l=rtrim($level, ",");
            }
            if(!empty($frequency))
            {
                  $f = rtrim($frequency, ",");
            }
           
            if(!empty($type))
            {
                    $t= rtrim($type, ",");
            }
           
            if(!empty($Planlength))
            {
                   $p = rtrim($Planlength, ",");
            }
           
           
          
          
        
            // $starting =0;
            // $ending=0;
           
           
            if(!empty($p))
            {
                $planlengtharr = explode(",",$p);
       
                $planlenbetween = array();
                if(!empty($planlengtharr))
                {
                    // $c = count($planlengtharr);
                    foreach($planlengtharr as $k => $pl)
                    {
                        $parr = explode("-",$pl);
                        
                        for($i= $parr[0]; $i<=$parr[1];$i++)
                        {
                           // $planlenbetween.=$i.",";
                            array_push($planlenbetween,$i);
                            //echo $i;
                        }
                        // if($k==0)
                        // {
                        //     $starting =$parr[0];     
                        // }
                        // if($k==($c-1))
                        // {
                        //  $ending =$parr[1];        
                        // }
                    }
                     $ar2 = array_unique($planlenbetween);
                    $st ="";
                    foreach($ar2 as $a)
                    {
                        $st .="'".$a."',";
                    }
               
                }
               $pl = rtrim($st, ",");
            }
           
        
        
       
        
         $sql ='';
            $sql .='select workout_plans.*,users.id,users.status,users.name as fitness_trainers_name ,users.gender,no_of_days.id,exercise_details.exercise_name from workout_plans join users on users.id = workout_plans.trainer_id join no_of_days on no_of_days.workout_plans_id = workout_plans.id join exercise_details on exercise_details.exercise_name_id = no_of_days.id where users.status=2 ';
            if(!empty($c))
            {
                $sql .='and workout_plans.category in ('.$c.') ';
            }
             if(!empty($g))
            {
            $sql .='and users.gender in ('.$g.') ';    
            }
             if(!empty($l))
            {
                $sql .='and workout_plans.level in ('.$l.') ';
            }
              if(!empty($f))
            {
                $sql .=' and workout_plans.frequency in ('.$f.')';
            }
             if(!empty($t))
            {
                $sql .=' and workout_plans.type in ('.$t.') ';
            }
              if(!empty($pl))
            {
                $sql .=' and workout_plans.frequency in ('.$pl.')';
            }

           if(!empty($sql))
           {
            $workoutplansfitness = DB::select($sql);
           }
         
        
        
         $workoutfrequency = workoutPlans::all();
            if(empty($workoutfrequency))
            {
             $sqlq='select workout_plans.*,users.id,users.status,users.name as fitness_trainers_name ,no_of_days.id,exercise_details.exercise_name from workout_plans join users on users.id = workout_plans.trainer_id join no_of_days on no_of_days.workout_plans_id = workout_plans.id join exercise_details on exercise_details.exercise_name_id = no_of_days.id where users.status=2';
              $workoutplansfitness = DB::select($sqlq);
            }
            if(!empty($workoutfrequency))
            {
                 $result = array("status"=>true,"workoutfrequency"=>$workoutfrequency,'workoutplansfitness'=>$workoutplansfitness);
                
            }
            else
            {

                 $result = array("status"=>false,"workoutfrequency"=>$workoutfrequency,'workoutplansfitness'=>$workoutplansfitness);
           
            }
           
           
       
            }
             else
            {
                  $sqlq='select workout_plans.*,users.id,users.status,users.name as fitness_trainers_name ,no_of_days.id,exercise_details.exercise_name from workout_plans join users on users.id = workout_plans.trainer_id join no_of_days on no_of_days.workout_plans_id = workout_plans.id join exercise_details on exercise_details.exercise_name_id = no_of_days.id where users.status=2';
               $workoutplansfitness = DB::select($sqlq);
                 $workoutfrequency = workoutPlans::all();
                 $result = array("status"=>true,"workoutfrequency"=>$workoutfrequency,'workoutplansfitness'=>$workoutplansfitness);
           
            }
           
             echo json_encode($result);

    }
    public function fit_plans_detail($tainerid,$workoutid)
    {
      $workoutplan =[];  
        $workout = workoutPlans::join('users', 'users.id', '=', 'workout_plans.trainer_id')
                    ->where(array("workout_plans.trainer_id"=>$tainerid,"workout_plans.id"=>$workoutid))
                    ->get(['workout_plans.*', 'users.name as fitness_trainers_name']);
      
         foreach($workout as $val)
        {
           if(!empty($val->amount))
            {
             $val->amount = number_format($val->amount,2,".");
            }
            else
            {
                 $val->amount = "0.00";
           
            }
            $days = ExcerciseName::where(array("workout_plans_id"=>$val->id))->get();
            $val->day =isset( $days)? $days:'';
                $workoutplan['workout']=$val;
        }
    //    $workoutplan['user'] =User::where("id",$tainerid)->first();
        //dd($workoutplan['fitness_trainner_name']);
        // echo json_encode($workoutplan);
        // exit;
        return view('fit_plans_detail',compact('workoutplan'));
    }
    public function workout_payment($workoutid)
    {
        $workoutplan =[];  
        $workout = workoutPlans::join('users', 'users.id', '=', 'workout_plans.trainer_id')
                    ->where(array("workout_plans.id"=>$workoutid))
                    ->get(['workout_plans.*', 'users.name as fitness_trainers_name']);
      
         foreach($workout as $val)
        {
            $val->level = ucfirst($val->level);
        if(!empty($val->amount))
            {
             $val->amount = number_format($val->amount,2,".");
            }
            else
            {
                 $val->amount = "0.00";
           
            }
            $days = ExcerciseName::where(array("workout_plans_id"=>$val->id))->get();
            $val->day =isset( $days)? $days:'';
                $workoutplan['workout']=$val;
        }
        // echo json_encode($workoutplan);
        // exit;
        return view('workout_payment',compact('workoutplan'));
    }
    
    public function after_payment($workoutid)
    {
        $workoutplan =[];
        $exercise_details=[];  
        $workout = workoutPlans::join('users', 'users.id', '=', 'workout_plans.trainer_id')
        ->join('workout_category', 'workout_category.id', '=', 'workout_plans.category')
                    ->where(array("workout_plans.id"=>$workoutid))
                    ->get(['workout_plans.*', 'users.name as fitness_trainers_name','workout_category.name as category']);
         foreach($workout as $val)
        {
            $val->level = ucfirst($val->level);
         if(!empty($val->amount))
            {
             $val->amount = number_format($val->amount,2,".");
            }
            else
            {
                 $val->amount = "0.00";
           
            }
            $days = ExcerciseName::where(array("workout_plans_id"=>$val->id))->get();
            $val->day =isset( $days)? $days:'';
                $workoutplan['workout']=$val;
            
            // foreach($val->day as $k=>$v)
            // {
            //     $ExcerciseDetail=ExcerciseDetails::where('exercise_name_id',$v->workout_plans_id)->get();
               
            //     array_push($exercise_details,$ExcerciseDetail);
            //    // $val->exercise_details['exercise_details']=$v;
            // }

                // foreach($val->day as $d)
                // {
                //     $ed=  ExcerciseDetails::where('exercise_name_id',$d->id)->first();
                //    $d->exercise_details = $ed;
                //     $exercise_details['exercise_details'] =$ed;
                // }
        }

        //dd($workoutplan);
  $workout_category = DB::table('workout_category')->get();

        foreach($workoutplan as $w)
        {
            foreach($w->day as $k=> $ex)
            {
                $exercise_details[]=ExcerciseDetails::where('exercise_name_id',$ex->id)->get();
            }

        }

       //  echo "<pre>";
       // // dd(count($exercise_details));
       //  foreach($exercise_details as $ky=> $s)
       //  {
       //   //   echo $ky;
       //      print_r($s[0]->id);
       //  }
        //exit;
    //    dd($workoutplan);
        
        return view('after_payment',compact('workoutplan','exercise_details','workout_category'));
    }
}