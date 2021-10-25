<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FitnessTrainers;
use App\Models\User;
use App\Models\SetAvailabilitys;
use App\Models\LeaveManages;
use DB;
class SetAvailabilityController extends Controller
{
    public function index()
    {
      
        $where =array('id'=>session()->get('fitness_tranner_id'));
        $fitnesstrainer  =  User::where($where)->first();
       
        if(is_null($fitnesstrainer->image))
        {
            $fitnesstrainer->image="1.png";
        }

    
        $setavailabilitydata = SetAvailabilitys::where('fitness_trainner_id',session()->get('fitness_tranner_id'))->get();
        
      
      //  dd($working_day_status);
        foreach($setavailabilitydata as $key => $value) 
        {
            $setavailabilitydata[$key]->efrom_time =  date('h:i',strtotime($value->from_time));
            $setavailabilitydata[$key]->eto_time =  date('h:i',strtotime($value->to_time));
            $setavailabilitydata[$key]->from_time  =date('h:i:A',strtotime($value->from_time));
            $setavailabilitydata[$key]->to_time  =date('h:i:A',strtotime($value->to_time));
        }
        $working_days = array();
        if(!empty($setavailabilitydata[0]->working_day))
        {
            $working_day =explode(",",$setavailabilitydata[0]->working_day);
            $working_day_status = explode(",",$setavailabilitydata[0]->working_day_status);
    
         
            foreach($working_day as $key=>$val)
            {
                $working_days[$key]['day'.$key] =$val;
                $working_days[$key]['status'.$key]  =$working_day_status[$key];
            }
        }

        $working_day_statusshow =array();
        if(!empty($setavailabilitydata[0]->working_day_status))
        {
             $working_day_statusshow = explode(",",$setavailabilitydata[0]->working_day_status);
        }

//         echo "<pre>";
//         dd($working_days);
//         foreach($working_days as $key=>$val)
//             {
//                 print_r($val['day'.$key]);
//                 print_r($val['status'.$key]);
//             }
// die;

  $leavemanages = LeaveManages::where("user_id",session()->get('fitness_tranner_id'))->get();

         $first_day_this_month = date('Y-1-m'); // hard-coded '01' for first day
        $tmontharr = explode("-",$first_day_this_month);
      
        $days = [];

        foreach($working_day_statusshow as $k =>$val)
        {
           
            if(($k==0) && ($val=="2"))
            {
                array_push($days,"Mon");
            }
             if(($k==1) && ($val=="2"))
            {
                array_push($days,"Tue");
            }
             if(($k==2) && ($val=="2"))
            {
                array_push($days,"Wed");
            }
             if(($k==3) && ($val=="2"))
            {
                array_push($days,"Thu");
            }
             if(($k==4) && ($val=="2"))
            {
                array_push($days,"Fri");
            }
             if(($k==5) && ($val=="2"))
            {
               array_push($days,"Sat");
            }
             if(($k==6) && ($val=="2"))
            {
                array_push($days,"Sun");
            }
          
        }
   //   dd($days);
        $current_start_date = $tmontharr[1];

         $last_day_this_month  = date('Y-t-m');

         $lastmontharr = explode("-",$last_day_this_month);

        $current_end_date = $lastmontharr[1];
        
          $current_day = date('D', strtotime(date("Y-m-d")));
        //dd($current_day);

        $list=array();
        $month = $tmontharr[2];
        $year = $tmontharr[0];
    //    echo "<pre>";
        for($d= $current_start_date; $d<=$current_end_date; $d++)
        {
            $time=mktime(12, 0, 0, $month, $d, $year);          
            if (date('m', $time)==$month)       
                $datsAll = date('D', $time);
                   
                    if(in_array($datsAll,$days))
                    {
                //       $list[]=  date("m/d/Y", $time);
                        $list[]=date('Y-m-d', $time);

                    }
        }
      
        //get data from leave management table
    $fitness_tranner_id=  session()->get('fitness_tranner_id');
    
            $leave = LeaveManages::where("user_id",$fitness_tranner_id)->get();
            if(count($leave)>0)
            {
                foreach($leave as $key =>$val)
                {
    //             $newDate = date("m/d/Y", strtotime($val->date));
                   //array_push($list,$val->date);
//print_r($newDate);
                array_push($list,$val->date);
                }
            }
            $sql ='SELECT GROUP_CONCAT(day(date)) as Days,Month(date) as Months  from manage_leaves GROUP BY MONTH(date),YEAR(updated_at)';


            $leave_date = DB::select($sql);
           
       //     dd($datestr);
          
            $listdata = [];
      //      dd($leavemanages);
      //  echo "<pre>";

        //     foreach($list as $k=> $l)
        //     {
        //         if(!empty($leavemanages[$k]->date))
        //         {
        //             if(in_array($leavemanages[$k]->date, $list))
        //               {

        //                 $list[$k] .="/status=0";//close
        //               }
        //           }
        //           else
        //           {
        //             $list[$k] .="/status=1";       //open
         
        //         }
        // }
  // dd($list);
        return view('Pages.setAvailability.setAvailability',compact('fitnesstrainer','setavailabilitydata','working_days','working_day_statusshow','leavemanages','list','leave_date'));
    }

   public function firness_trainer_time_slot(Request $request)
   {
        if($request->input())
        {
          // dd($request->input());
            $SetAvailability  = new SetAvailabilitys();
            $SetAvailability->from_time =$request->from_time;
            $SetAvailability->to_time =$request->to_time;
            $SetAvailability->fitness_trainner_id =$request->fitness_trainner_id;
            $SetAvailability->working_day ="1,2,3,4,5,6,7";
            $SetAvailability->working_day_status ="2,2,2,2,2,2,2";
             
            $SetAvailability->save();
            $setavailabilitydata =  $SetAvailability->where('fitness_trainner_id',$request->fitness_trainner_id)->get();
        
            foreach($setavailabilitydata as $key => $value) 
            {
                $setavailabilitydata[$key]->efrom_time =  date('h:i',strtotime($value->from_time));
                $setavailabilitydata[$key]->eto_time =  date('h:i',strtotime($value->to_time));
                $setavailabilitydata[$key]->from_time  =date('h:i:A',strtotime($value->from_time));
                $setavailabilitydata[$key]->to_time  =date('h:i:A',strtotime($value->to_time));
        
            }
            if(!empty($setavailabilitydata))
            {
                $result=array('status' => true,'data' =>$setavailabilitydata);
            }
            else
            {
                $result=array('status' => false,'data' =>"null");
            }
            echo json_encode($result);
        }
   }

   public function edit_firness_trainer_time_slot(Request $request)
   {
        if($request->input())
        {
           
            $SetAvailability  = new SetAvailabilitys();
            $SetAvailabilityget =  $SetAvailability->where('fitness_trainner_id',$request->fitness_trainner_id)->first();
         
            $data = array(
                'working_day' =>$SetAvailabilityget->working_day,
                'working_day_status' =>$SetAvailabilityget->working_day_status,
                'from_time'=>(isset($request->from_time)? $request->from_time  : $SetAvailabilityget->from_time),
                'to_time'=>(isset($request->to_time)? $request->to_time  : $SetAvailabilityget->to_time),
                'fitness_trainner_id'=>(isset($request->fitness_trainner_id)? $request->fitness_trainner_id  : $SetAvailabilityget->fitness_trainner_id),
                'working_day'=> $SetAvailabilityget->working_day,
                'working_day_status'=> $SetAvailabilityget->working_day_status,
        ); 
    
            SetAvailabilitys::where('fitness_trainner_id', $request->fitness_trainner_id)->update($data);
            $SetAvailabilitydata =  $SetAvailability->where('fitness_trainner_id',$request->fitness_trainner_id)->get();
            if(isset($SetAvailabilitydata))
            {
                $result=array('status' => true,'data' =>$SetAvailabilitydata);
            }
            else
            {
                $result=array('status' => false,'data' =>"null");
            }
            echo json_encode($result);
        }
   }

   public function add_firness_trainer_set_working_day(Request $request)
   {
        if($request->input())
        {
            $working_day = "";
            $working_day_status = "";
         
            $SetAvailability  = new SetAvailabilitys();
            
            $monday_working_day = $request->monday_working_day;
            $working_day.=$monday_working_day;
            $monday = $request->monday;
            $working_day_status .=$monday;
         
            $tuesday_working_day = $request->tuesday_working_day;
            $working_day.=",".$tuesday_working_day;
            $tuesday = $request->tuesday;
            $working_day_status.="," .$tuesday;

            $wednesday_working_day = $request->wednesday_working_day;
            $working_day.=",".$wednesday_working_day;
            $wednesday = $request->wednesday;
            $working_day_status.="," .$wednesday;
            

            $thursday_working_day = $request->thursday_working_day;
            $working_day.=",".$thursday_working_day;
            $thursday = $request->thursday;
            $working_day_status.="," .$thursday;
          
            $friday_working_day = $request->friday_working_day;
            $working_day.=",".$friday_working_day;
            $friday = $request->friday;
            $working_day_status.="," .$friday;
          
            $saturday_working_day = $request->saturday_working_day;
            $working_day.=",".$saturday_working_day;
            $saturday = $request->saturday;
            $working_day_status.="," .$saturday;
          
            $sunday_working_day = $request->sunday_working_day;
            $working_day.=",".$sunday_working_day;
            $sunday = $request->sunday;
            $working_day_status.=",".$sunday;
           
            $data['working_day'] =$working_day;
            $data['working_day_status'] =$working_day_status;
           
            
            SetAvailabilitys::where('fitness_trainner_id', $request->fitness_trainner_id)->update($data);
            $SetAvailabilitydata =  $SetAvailability->where('fitness_trainner_id',$request->fitness_trainner_id)->get();
            if(isset($SetAvailabilitydata))
            {
                $result=array('status' => true,'data' =>$SetAvailabilitydata);
            }
            else
            {
                $result=array('status' => false,'data' =>"null");
            }
            echo json_encode($result);
        }
    }
}
