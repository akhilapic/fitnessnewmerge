<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\workoutPlans;
use App\Models\No_of_days;
use App\Models\ExcerciseName;
use App\Models\ExcerciseDetails;
use App\Models\FitnessTrainers;
use App\Models\User;
use Owenoj\LaravelGetId3\GetId3;

use DB;
use FFMpeg;

// use FFProbe;
class workoutPlansController extends Controller
{
    public function index()
    { 
        //$workoutplans = workoutPlans::all(); 
        $workoutplans = workoutPlans::join('workout_category',"workout_category.id","=","workout_plans.category")
                    ->get(['workout_category.name as category_name','workout_plans.*']);

                 //   dd($workoutplans); 
        return view('Pages.workoutplans.manage-workoutplans', compact('workoutplans'));
    }
    public function add_workout_plan_view()
    {
        $fitnesstrainers = User::where(['role'=>"97",'status'=>2])->get();
       
        $workout_category = DB::table('workout_category')->get();

        return view('Pages.workoutplans.add_workout_plan_view',compact('fitnesstrainers','workout_category'));
    }
/*
    public function store(Request $request)
    {   

        
        dd($request->name);
        echo "<pre>";
      
        echo "number_of_days-->";
        print_r($request->number_of_days);
        echo "excercise_name-->";

        print_r($request->excercise_name);
        echo "exercise_details_video-->";
        print_r($request->file('exercise_details_video'));
    exit;
    //  dd($request->input());
        $workoutPlans = new workoutPlans();
        $workoutPlans->name =  $request->name;
        $workoutPlans->category_id =  $request->category_id;
        $workoutPlans->description =  $request->description;
        
        $workoutPlans->type =  $request->type;
          $workoutPlans->tranning_name =  $request->tranning_name;
           
            $fileimage="";
           $image_url='';
        if($request->hasfile('upload_video'))
        {
                
            $file_image=$request->file('upload_video');
            $fileimage=$file_image->getClientOriginalName();
            $destination=public_path("video");
            $file_image->move($destination,$fileimage);
            $image_url=url('public/video').'/'.$fileimage;
            $workoutPlans->upload_video =  $image_url;
        }
        $workoutPlans->location =  $request->location;
      
        $workoutPlans->level =  $request->level;
        $workoutPlans->save();

        $no_of_days = new No_of_days();
        $number_of_days = $request->number_of_days;
        
        foreach($number_of_days as $no)
        {
            $no_of_days->workout_plans_id =$workoutPlans->id ;
            $no_of_days->no_of_days = $no;
            $no_of_days->save(); 
            dd($no_of_days->id);
        }
         exit;
        if($sub->save()){
            $result=array('status'=>true,'message'=> 'Category Insert Successfully.');
        }
        else{
            $result=array('status'=>false,'message'=> 'Data Insert Not Successfully.');
        }
        echo json_encode($result);
        
    }*/

    public function store(Request $request)
    {   
        $workoutPlans = new workoutPlans();
     //   dd($request->input());

        $workoutPlans->trainer_id =  $request->trainer_id;
        $workoutPlans->name =  $request->name;
        $workoutPlans->arabic_name =  $request->arabic_name;

        $workoutPlans->amount =  $request->amount;
        $workoutPlans->category =  $request->category;
        $workoutPlans->description =  $request->description;
        $workoutPlans->arabic_description =  $request->arabic_description;
        
        $workoutPlans->frequency =  $request->frequency;
        $workoutPlans->calories_burn =  $request->calories_burn;
      
        
        $workoutPlans->type =  $request->type;
         
            $fileimage="";
           $image_url='';
        if($request->hasfile('upload_video'))
        {
                

            $file_image=$request->file('upload_video');
            $fileimage=$file_image->getClientOriginalName();
            
           $track = new GetId3(request()->file('upload_video'));
             $workoutPlans->duration =$track->getPlaytime();
            $destination=public_path("video");
            $file_image->move($destination,$fileimage);
         

// $getID3 = new \getID3;
// $file = $getID3->analyze($file_image);
//  $workoutPlans->duration = date('H:i:s.v', $file['upload_video']);


           $image_url.=url('public/video').'/'.$fileimage;
            
        }
//    dd($workoutPlans->duration);
  //    exit;
        $workoutPlans->status =  0;
        
      $workoutPlans->upload_video =  $image_url;
        $workoutPlans->level =  $request->level;
       $workoutPlans->save();

        // get data of excercise details
        $getDetails=explode('#',$request->workout);
        $wokout=array();
        foreach($getDetails as $key=>$value){
            $str=trim($value,",");
            if($str!=""){
                array_push($wokout, explode(",",$str));
            }
            
        }
        $collection=collect($wokout);

     //   dd($wokout);
        
      
        $ex=array_column($wokout,1);
        $noifarabicex = array_column($wokout,2);

        $exercise_details_name = array_column($wokout,3);
        $exercise_details_arabic_name = array_column($wokout,4);
     
        $reps=array_column($wokout,5);
        $sats=array_column($wokout,6);
        
        $cal=array_column($wokout,7);
        
        
        $excercise_name=array_unique($ex);
        $noofexcercise_name=array_unique($noifarabicex);


        $exercise_details_namearr = array_unique($exercise_details_name);
        $exercise_details_arabic_namearr = array_unique($exercise_details_arabic_name);

        $caloriesarr = array_unique($cal);

        $repsarr = array_unique($reps);
        $satsarr = array_unique($sats);
        
        $nameIds=array();
        
        $dd=0;      
        foreach($excercise_name as $k=>  $val){
                $E_Name = new ExcerciseName();
                $E_Name->workout_plans_id=$workoutPlans->id;
                $E_Name->exercise_name = $val;
                 $E_Name->arabic_exercise_name = $noofexcercise_name[$k];
                
               $E_Name->save();
                // $nameIds[$value]=$E_Name->id;            
                $filtered = $collection->filter(function ($value, $key) use($val) {
                    if($value[1]==$val){
                        return true;
                    }
                });
      //  dd($filtered);
               foreach($filtered as $key=>$value){
                $file='';
                $eduration="";
                if($value){
                    $image_base64 = base64_decode($value[9]);
                    //$file = uniqid() .'.mp4';
                    $file = uniqid() .'.mp4';
                    $url=storage_path('app/public').'/'.$file;
                 //   $url2=url('public/video').'/'.$file;
                        
                     

                     file_put_contents($url, $image_base64);
                      
                }

               // $track = new GetId3($url);
               // $track = GetId3::fromDiskAndPath('local', $url);
               // $eduration =$track->getPlaytime();
             //   dd($track);

                $Day_name = new ExcerciseDetails();
                $Day_name->exercise_name=$value[3];
                   $Day_name->arabic_exercise_name=$value[4];
                
                $Day_name->reps = $repsarr[$dd];
                $Day_name->sets = $satsarr[$dd];
                $Day_name->calories = $caloriesarr[$dd];
                $Day_name->exercise_video=$file;
                $Day_name->duration="10";//$eduration;
                
                $Day_name->exercise_name_id=$E_Name->id;
                $Day_name->save();
                $dd++;             
               }
        }
        
        
        
     
        if($workoutPlans){
            $result=array('status'=>true,'message'=> 'Category Insert Successfully.');
        }
        else{
            $result=array('status'=>false,'message'=> 'Data Insert Not Successfully.');
        }
        echo json_encode($result);
        
    }

    // public function workout_plan_update(Request $request)
    // {
    //   //  dd($request->input());
      
    //     $workoutPlans = new workoutPlans();
    //     $editid = $request->editid;
    //     $get_workoutPlans = workoutPlans::where("id",$editid)->first();
        
    //     $get_workoutPlans_data = array();
    //    $get_workoutPlans_data['trainer_id'] =(isset($request->trainer_id)? $request->trainer_id : $get_workoutPlans->trainer_id);
    //     $get_workoutPlans_data['name']= (isset($request->name)? $request->name : $get_workoutPlans->name);
    //     $get_workoutPlans_data['category']= (isset($request->category )? $request->category  : $get_workoutPlans->category);
    //     $get_workoutPlans_data['description']= (isset($request->description)? $request->description : $get_workoutPlans->description);
    //     $get_workoutPlans_data['type']= (isset($request->type)? $request->type : $get_workoutPlans->type);
    //     $get_workoutPlans_data['level']= (isset($request->level)? $request->level : $get_workoutPlans->level);

    //      $get_workoutPlans_data['frequency']= (isset($request->frequency)? $request->frequency : $get_workoutPlans->frequency);
    //       $get_workoutPlans_data['calories_burn']= (isset($request->calories_burn)? $request->calories_burn : $get_workoutPlans->calories_burn);

    //     $old_upload_video = $request->old_upload_video;
    //     // $workoutPlans->name =  $request->name;
    //     // $workoutPlans->category =  $request->category_id;
    //     // $workoutPlans->description =  $request->description;
        
    //     // $workoutPlans->type =  $request->type;
         
           
    //        $fileimage="";
    //        $image_url='';
        
    //        if($request->hasfile('upload_video'))
    //       {
    //         $file_image=$request->file('upload_video');
    //         $fileimage=$file_image->getClientOriginalName();
    //         $destination=public_path("video");
    //         $file_image->move($destination,$fileimage);
    //         $image_url=url('public/video').'/'.$fileimage;
    //         $get_workoutPlans_data['upload_video'] =$image_url;
    //       }
       
    //     $workoutPlans->where("id",$editid)->update($get_workoutPlans_data);
     
    //   //  $workoutPlans->save();

    //     // get data of excercise details
    //     $getDetails=explode('#',$request->workout);
       
    //     $wokout=array();
    //     foreach($getDetails as $key=>$value){
    //         $str=trim($value,",");
    //         if($str!=""){
    //             array_push($wokout, explode(",",$str));
    //         }
            
    //     }
       
    //     $collection=collect($wokout);

    //   // if($wokout[0][6]!="null"){
    //   //   echo var_dump($wokout[0][6]);
    //   //   dd($wokout);
    //   // }else{
    //   //   dd($wokout[0][6]);
    //   // }

    //     $ex=array_column($wokout,2);
    //     $ids = array_column($wokout,1);
    //     $caloriesarr =array_column($wokout,3);
    //     $excercise_name=array_unique($ex);
         
    //     $e_id = array_unique($ids);

    //     foreach($e_id as $key=>$value){
    //         ExcerciseName::where('id',$value)->delete();
    //         ExcerciseDetails::where('exercise_name_id',$value)->delete();

    //     }
    //     $dd=0;
    //     $nameIds=array();
    //     foreach($excercise_name as $val){
    //             $E_Name = new ExcerciseName();
    //             $E_Name->workout_plans_id=$editid;
    //             $E_Name->exercise_name = $val;
    //             $E_Name->save();
    //             // $nameIds[$value]=$E_Name->id;            
    //             $filtered = $collection->filter(function ($value, $key) use($val) {
    //                 if($value[2]==$val){
    //                     return true;
    //                 }
    //             });
    //         //    dd($filtered);
    //            foreach($filtered as $key=>$value){
    //             $file='test';
                
    //             if($value[7]=="null"){
    //                 $file=isset($value[5])?$value[5]:'';
    //              }else{
    //                  $image_base64 = base64_decode($value[8]);
    //                 //$file = uniqid() .'.mp4';
    //                  $file = uniqid() .'.mp4';
    //                  $url=public_path("video").'/'.$file;
    //                 //$url=url('public/video').'/'.$file;
    //                  file_put_contents($url, $image_base64);
    //              }

    //             $Day_name = new ExcerciseDetails();
    //             $Day_name->exercise_name=$value[6];
    //             $Day_name->calories=$caloriesarr[$dd];
    //             $Day_name->exercise_video=$file;
    //             $Day_name->exercise_name_id=$E_Name->id;
    //             $Day_name->save();
                            
    //            }
    //     }
        
        
     
    //     if($editid){
    //         $result=array('status'=>true,'message'=> 'workout update Successfully.');
    //     }
    //     else{
    //         $result=array('status'=>false,'message'=> 'Data Insert Not Successfully.');
    //     }
    //     echo json_encode($result);
    // }

    public function workout_plan_update(Request $request)
    {
      
      //  dd($request->input());
        $workoutPlans = new workoutPlans();
        $editid = $request->editid;
        $get_workoutPlans = workoutPlans::where("id",$editid)->first();
        
        $get_workoutPlans_data = array();
       $get_workoutPlans_data['trainer_id'] =(isset($request->trainer_id)? $request->trainer_id : $get_workoutPlans->trainer_id);
        $get_workoutPlans_data['name']= (isset($request->name)? $request->name : $get_workoutPlans->name);
        $get_workoutPlans_data['arabic_name']= (isset($request->arabic_name)? $request->arabic_name : $get_workoutPlans->arabic_name);

        $get_workoutPlans_data['amount']= (isset($request->amount)? $request->amount : $get_workoutPlans->amount);
        $get_workoutPlans_data['category']= (isset($request->category )? $request->category  : $get_workoutPlans->category);
       // $get_workoutPlans_data['duration']= (isset($request->duration )? $request->duration  : $get_workoutPlans->duration);
       
      
        $get_workoutPlans_data['description']= (isset($request->description)? $request->description : $get_workoutPlans->description);
        $get_workoutPlans_data['arabic_description']= (isset($request->arabic_description)? $request->arabic_description : $get_workoutPlans->arabic_description);

        $get_workoutPlans_data['type']= (isset($request->type)? $request->type : $get_workoutPlans->type);
        $get_workoutPlans_data['level']= (isset($request->level)? $request->level : $get_workoutPlans->level);

         $get_workoutPlans_data['frequency']= (isset($request->frequency)? $request->frequency : $get_workoutPlans->frequency);
          $get_workoutPlans_data['calories_burn']= (isset($request->calories_burn)? $request->calories_burn : $get_workoutPlans->calories_burn);

        $old_upload_video = $request->old_upload_video;
        // $workoutPlans->name =  $request->name;
        // $workoutPlans->category =  $request->category_id;
        // $workoutPlans->description =  $request->description;
        
        // $workoutPlans->type =  $request->type;
         
           
           $fileimage="";
           $image_url='';
           if($request->hasfile('upload_video'))
          {
            $file_image=$request->file('upload_video');
          
          
            $fileimage=$file_image->getClientOriginalName();
            $destination=public_path("video");
          //  dd($destination);
            $file_image->move($destination,$fileimage);
            $image_url=url('public/video').'/'.$fileimage;
            //dd($image_url);
            $get_workoutPlans_data['upload_video'] =$image_url;

           $track = new GetId3(request()->file('upload_video'));
             $get_workoutPlans_data['duration'] =$track->getPlaytime();
            $destination=public_path("video");
          }
          else
          {
            $get_workoutPlans_data['duration']= $get_workoutPlans->duration;
          }
       
        $workoutPlans->where("id",$editid)->update($get_workoutPlans_data);
     
      //  $workoutPlans->save();

        // get data of excercise details
        $getDetails=explode('#',$request->workout);
      
        $wokout=array();
        foreach($getDetails as $key=>$value){
            $str=trim($value,",");
            if($str!=""){
                array_push($wokout, explode(",",$str));
            }
            
        }
       
        $collection=collect($wokout);
        
      //  dd($collection);
      // if($wokout[0][6]!="null"){
      //   echo var_dump($wokout[0][6]);
      //   dd($wokout);
      // }else{
      //   dd($wokout[0][6]);
      // }
        // dd($wokout);
        // exit;
        $ex=array_column($wokout,2);
        $ids = array_column($wokout,1);
       // $ids = array_column($wokout,0);

        // $reps=array_column($wokout,3);
        // $sats=array_column($wokout,4);

        $workoutarabicname  = array_column($wokout,3);
        $arabic_excercise_name  = array_column($wokout,10);

        $reps=array_column($wokout,4);
        $sats=array_column($wokout,5);

        $caloriesarr =array_column($wokout,6);
        $excercise_name=array_unique($ex);
        
        $arabic_excercise_namearr = array_unique($arabic_excercise_name);
        $workoutarabicnamearr = array_unique($workoutarabicname);

        $repsarr = array_unique($reps);
        $satsarr = array_unique($sats); 
        $e_id = array_unique($ids);

        foreach($e_id as $key=>$value){
            ExcerciseName::where('id',$value)->delete();
            ExcerciseDetails::where('exercise_name_id',$value)->delete();

        }
        $dd=0;
        $nameIds=array();
        foreach($excercise_name as $k=> $val){
                $E_Name = new ExcerciseName();
                $E_Name->workout_plans_id=$editid;
                $E_Name->exercise_name = $val;
                $E_Name->arabic_exercise_name = $workoutarabicnamearr[$k];
                $E_Name->save();
                // $nameIds[$value]=$E_Name->id;            
                $filtered = $collection->filter(function ($value, $key) use($val) {
                    if($value[2]==$val){
                        return true;
                    }
                });
            //    dd($filtered);
               foreach($filtered as $key=>$value){
                $file='';
                
                if($value[11]=="null"){
                    $file=isset($value[8])?$value[8]:'';
                 }else{
                     $image_base64 = base64_decode($value[11]);
                    //$file = uniqid() .'.mp4';
                     $file = uniqid() .'.mp4';
                     $url=public_path("video").'/'.$file;
                    //$url=url('public/video').'/'.$file;
                     file_put_contents($url, $image_base64);
                 }

                $Day_name = new ExcerciseDetails();
                $Day_name->exercise_name=$value[9];
                $Day_name->arabic_exercise_name=$arabic_excercise_namearr[$dd];
                $Day_name->calories=$caloriesarr[$dd];
                $Day_name->reps = $repsarr[$dd];
                $Day_name->sets = $satsarr[$dd];
                $Day_name->exercise_video=$file;
                $Day_name->exercise_name_id=$E_Name->id;
                $Day_name->save();
                $dd++;             
  
               }
        }
        
        
     
        if($editid){
            $result=array('status'=>true,'message'=> 'workout update Successfully.');
        }
        else{
            $result=array('status'=>false,'message'=> 'Data Insert Not Successfully.');
        }
        echo json_encode($result);
    }     
  
    
    public function  delete(Request $request,$id){ 
      $workoutPlans = new workoutPlans();
        $workoutPlans->where("id",$id)->delete();
        return redirect('/workout_plans');
    }

    public function deleteAll(Request $request){
        $ids = $request->ids;
      //  dd($request->ids);
        $workoutPlans = new workoutPlans();
        $workoutPlans->whereIn("id",explode(",",$ids))->delete();
        return response()->json(['success'=>"workoutplans Deleted successfully."]);
    }

    public function edit(Request $request,$id) {
        $id = $request->id;
        $exercise_details =array();
        $workoutPlans = workoutPlans::find($id);
        $no_of_days = ExcerciseName::where("workout_plans_id",$id)->get();
        $workoutPlans ->no_of_days = (isset($no_of_days)? count($no_of_days) : '0' );
         $days=array();
          $fitnesstrainers = User::where(['role'=>"97",'status'=>2])->get();
     //   dd($no_of_days);
       //   $fitnesstrainers = FitnessTrainers::where("status",2)->get();
        foreach($no_of_days as $key => $val)
        { 
            $arr=array();
            array_push($arr,$val->exercise_name);
            array_push($arr,$val->arabic_exercise_name);
            array_push($arr,$val->id);
            array_push($days,$arr);
            
        
          //  $exercise_details[$key]= ExcerciseDetails::where("exercise_name_id",$val->id)->get();
            $exercise_details[$key]=  ExcerciseDetails::join('no_of_days', 'no_of_days.id', '=', 'exercise_details.exercise_name_id')
            ->where("exercise_details.exercise_name_id",$val->id)
            ->get(['no_of_days.exercise_name as day','no_of_days.arabic_exercise_name' ,'no_of_days.id as no_of_days_id','no_of_days.workout_plans_id','exercise_details.*']);
        }

//    foreach($exercise_details as $key =>$val)
//    {

//        foreach($exercise_details[$key] as $k =>$val)
//         {
//             echo "<pre>";

//             echo var_dump($val);
//         }
//    }
//    exit;
     //    echo "<pre>";
     // //dd($exercise_details);
     // foreach($exercise_details as $k =>$v)
     // {
     //    print_r($days[$k]);
     //    foreach($exercise_details[$key] as $k =>$val)
     //    {
     //        printf();
     //    }
     // }
     // exit;
   //     dd($days);

  $workout_category = DB::table('workout_category')->get();
   if($workoutPlans){
            return view('Pages.workoutplans.edit_workout_plan_view',compact('workoutPlans','no_of_days','exercise_details','days','fitnesstrainers','workout_category'));
        }
     
    }
    public function workout_plans_active_desctive(Request $request)
    {
        
        $status=$request->status;
        $workout_plans_id=$request->workout_plans_id;
        $status_t = $status ? 0 : 1;
        workoutPlans::where('id',$workout_plans_id)->update(['status'=>$status_t]);
        return response()->json(['success'=>"Status Changed."]);

    }
   
}
