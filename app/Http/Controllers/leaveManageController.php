<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveManages;
use DB;
class leaveManageController extends Controller
{
   public function leave_manage(Request $request)
   {
    $fitness_tranner_id=  $request->session()->get('fitness_tranner_id');
    
      
        if($request->date)
        {
            $datearr = explode(",", $request->date);
          //  dd($datearr);
            foreach ($datearr as $key => $value) 
            {
                $res = LeaveManages::where('date',$value)
                                    ->where('user_id',$fitness_tranner_id)
                                    ->first();
                
                if(!empty($res))
                {
                    LeaveManages::where(['date'=>$value,'user_id'=>$fitness_tranner_id])->delete();
                }
                else
                {

                    $LeaveManages =  LeaveManages::create(array("user_id"=>$fitness_tranner_id,"date"=>$value,"status"=>1));
                  
                    //$data[$key] =array("user_id"=>$fitness_tranner_id,"date"=>$value,"status"=>1);       
                }
            }
        
            $result=array('status'=>true,'message'=> 'Leave Submit Successfully');
        echo json_encode($result);

        }
   }

   public function getAllleave_manage()
   {
        $LeaveManages = LeaveManages::all();
        $result=array('status'=>true,'leavemanages'=> $LeaveManages);
        echo json_encode($result);
   }

   public function leaveonoff()
   {
        $first_day_this_month = date('Y-1-m'); // hard-coded '01' for first day
        $tmontharr = explode("-",$first_day_this_month);
      
      
        $current_start_date = $tmontharr[1];

         $last_day_this_month  = date('Y-t-m');

         $lastmontharr = explode("-",$last_day_this_month);

        $current_end_date = $lastmontharr[1];
        
          $current_day = date('D', strtotime(date("Y-m-d")));
      

        $list=array();
        $month = $tmontharr[2];
        $year = $tmontharr[0];

        for($d= $current_start_date; $d<=$current_end_date; $d++)
        {
            $time=mktime(12, 0, 0, $month, $d, $year);          
            if (date('m', $time)==$month)       
                $datsAll = date('D', $time);
                if($datsAll!=$current_day)
                {
                    $list[]=date('Y-m-d', $time);
                }
        }
             $result=array('status'=>true,'daylist'=> $list);
            echo json_encode($result);
        }
}
