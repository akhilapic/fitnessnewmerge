<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Str;
use Carbon\Carbon;
use Hash;
use App\Models\User;
use App\Models\FitnessTrainers;
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP; 
use Validator;
class FitnessTrainerController extends Controller
{
    public function index()
    {
        $data['active']="beaTrainer";
        return view('BeaTrainer',$data);
    }

    public function getdata()
    {
      $fitnesstrainer  =  User::where("role","97")->orderBy('id', 'DESC')->get();
      return view('Pages.fitnesstrainers.manager_firness_trainers', compact('fitnesstrainer'));
    }
    /*
    public function fitness_trainer_dataold(Request $request)
    {
         $fitnesstrainer  =  new FitnessTrainers();
        if(!empty($request->input()))
        {
            $mobile_number =  $fitnesstrainer->where("mobile_number",$request->mobile_number)->first();
            $checkemail =  $fitnesstrainer->where("email",$request->email)->first();
            
            if(!is_null($mobile_number))
            {
               $result=array('statusmobile_number'=> false,'message'=> 'Mobile Number is allready taken.');
            }
            else if(!is_null($checkemail))
            {
               $result=array('statusemail'=> false,'message'=> 'Email is allready taken.');
            }
            else if(is_null($checkemail) && is_null($mobile_number))
            {
                $fitnesstrainer->name = $request->name;
                $fitnesstrainer->email = $request->email;
                $fitnesstrainer->country_code = $request->country_code;
          
                $fitnesstrainer->mobile_number = $request->mobile_number;
                $fitnesstrainer->gender = $request->gender;
                $fitnesstrainer->specialization =  implode(",",$request->specialization);
                $fileimage="";
                $image_url='';
             
                if($request->hasfile('upload_doc'))
                {
                    $file_image=$request->file('upload_doc');
                    $fileimage=$file_image->getClientOriginalName();
                    $fitnesstrainer->upload_doc = $fileimage;
                    $destination=public_path("upload_doc");
                    $file_image->move($destination,$fileimage);
                }   
             
                $fitnesstrainer->address = $request->address;
                $fitnesstrainer->updated_at = date("Y-m-d h:i:s");
                $fitnesstrainer->created_at = date("Y-m-d h:i:s");
                $fitnesstrainer->status = 1;
             
                $fitnesstrainers =  $fitnesstrainer->save();
             
                if($fitnesstrainers){
                    $result=array('status'=>true,'message'=> 'Your Request Send  Successfully.');
                }
                else{
                    $result=array('status'=>false,'message'=> 'Your Request Send Not Successfully.');
                } 
            }
        }
        echo json_encode($result);
    }*/

public function fitness_trainer_data(Request $request)
    {
         $fitnesstrainer  =  new User();
        if(!empty($request->input()))
        {
            $mobile_number =  $fitnesstrainer->where("phone",$request->mobile_number)->first();
            $checkemail =  $fitnesstrainer->where("email",$request->email)->first();
            
            if(!is_null($mobile_number))
            {
               $result=array('statusmobile_number'=> false,'message'=> 'Mobile Number is allready taken.');
            }
            else if(!is_null($checkemail))
            {
               $result=array('statusemail'=> false,'message'=> 'Email is allready taken.');
            }
            else if(is_null($checkemail) && is_null($mobile_number))
            {
                $fitnesstrainer->name = $request->name;
                $fitnesstrainer->email = $request->email;
                $fitnesstrainer->country_code = $request->country_code;
          
                $fitnesstrainer->phone = $request->mobile_number;
                $fitnesstrainer->gender = $request->gender;
                $fitnesstrainer->specialization =  implode(",",$request->specialization);
                $fileimage="";
                $image_url='';
                
                // if($request->hasfile('upload_doc'))
                // {
                //     $file_image=$request->file('upload_doc');
                //     $fileimage=$file_image->getClientOriginalName();
                //     $fitnesstrainer->upload_doc = $fileimage;
                //     $destination=public_path("upload_doc");
                //     $file_image->move($destination,$fileimage);
                    
                    
                // }   

                 if($request->hasfile('upload_doc')){
                    foreach($request->file('upload_doc') as $file){
                        $fileimage=$file->getClientOriginalName();
                        $file->move(public_path().'/upload_doc/',$fileimage);
                        $imagdata[] = $fileimage;
                    }

                 }
                 // $fitnesstrainer->upload_doc = implode(",",$fileimage); 
                $fitnesstrainer->address = $request->address;
                $fitnesstrainer->updated_at = date("Y-m-d h:i:s");
                $fitnesstrainer->created_at = date("Y-m-d h:i:s");
                 $fitnesstrainer->upload_doc = json_encode($imagdata);
                $fitnesstrainer->status = 1;
                $fitnesstrainer->role = "97";
             
                $fitnesstrainers =  $fitnesstrainer->save();
             
                if($fitnesstrainers){
                    $result=array('status'=>true,'message'=> 'Your Request Send  Successfully.');
                }
                else{
                    $result=array('status'=>false,'message'=> 'Your Request Send Not Successfully.');
                } 
            }
        }
        echo json_encode($result);
    }
    public function set_password_fitness_trainer(Request $request)
    {
         $fitnesstrainer  =  new User();

        if(!empty($request->input()))
        {
           
            if(!empty($request->status))
            {
                $id = $request->id;
                
                if($request->status=='2')
                {
                    $data['password']  = $request->password;
                    $data['status'] =2;
                }
                else
                {
                    $data['status'] =$request->status;
                }
                $data['updated_at'] = date("Y-m-d h:i:s");
                $update = $fitnesstrainer->where('id',$id) ->update($data);
                if($update){
                    if($request->status=='1')
                    {
                        $result=array('status'=>true,'message'=> 'Your Request Is Pending Id :  '.$id);
                    }
                    else if($request->status=='3')
                    {
                        $result=array('status'=>true,'message'=> 'Your Request is Rejected Id :  '.$id);
                    }
                    else if($request->status=='2')
                    {
                        $result=array('status'=>true,'message'=> 'Your Request Approved Successfully');
                    }
                }
                else{
                $result=array('status'=>false,'message'=> 'Set Password Fails.');
                } 
            }
            else
            {
                echo "reject pending";
            }
           
            echo json_encode($result);
        }
    }

    public function fitness_trainer_edit(Request $request,$id)
    {
        $fitnesstrainer  =  User::where("id",$id)->first();
    //    dd($fitnesstrainer);
        $country_code = $fitnesstrainer->country_code;
        $mobile_number = $fitnesstrainer->phone;

        $fitnesstrainer->phone = preg_replace("/^\+?{$country_code}/", '',$mobile_number);
      
         return view('Pages.fitnesstrainers.fitness_trainer_edit', compact('fitnesstrainer'));
    }

 
    public function deleteAll(Request $request){
        $ids = $request->ids;
       // dd($ids);
        $FitnessTrainers = new User();
    //    dd(explode(",",$ids));
        $ar = explode(",",$ids);
        if(!is_null($ar))
        {
            foreach ($ar as $key => $value) 
            {
               $getdata = $FitnessTrainers->select("upload_doc")->where("id",$value)->first();
                if(!is_null($getdata->upload_doc))
                {
                    if(file_exists(public_path('upload_doc/'.$getdata->upload_doc)))
                    {
                         unlink(public_path('upload_doc/'.$getdata->upload_doc));
                    }
                }
            }
           $FitnessTrainers->whereIn("id",explode(",",$ids))->delete();
             return response()->json(['success'=>"Fitness Trainer Deleted successfully."]);
          }
    }


    public function  delete(Request $request,$id){ 
      $FitnessTrainers = new User();
         $getdata = $FitnessTrainers->select("upload_doc")->where("id",$id)->first();
            if(!is_null($getdata->upload_doc))
            {
                if(file_exists(public_path('upload_doc/'.$getdata->upload_doc)))
                {
                     unlink(public_path('upload_doc/'.$getdata->upload_doc));
                }
            }
        $FitnessTrainers->where("id",$id)->delete();
        return redirect('/manager_firness_trainers');
    }

    public function fitness_trainer_view(Request $request,$id)
    {
          $fitnesstrainer  =  user::where("id",$id)->first();
  //  dd($fitnesstrainer);

      return view('Pages.fitnesstrainers.fitness_trainer_view', compact('fitnesstrainer'));
    }

    public function firness_trainer_update(Request $request)
    {
        $fitnesstrainer  =  new User();
        if(!empty($request->input()))
        {
            $data =array();
            $id = $request->id;
            $old_password = $request->old_password;
            $old_upload_doc = $request->old_upload_doc;

            $fitnesstrainer  =  $fitnesstrainer->where('id',$id)->first();
            
            if(!empty($old_password))
            {
                if($fitnesstrainer->password==$old_password)
                {
                    $fitnesstrainer->passowrd = $request->password;
                }
            }
                $fileimage="";
                    $image_url='';
                
                    if($request->hasfile('upload_doc'))
                    {
                        if(!is_null($old_upload_doc))
                        {
                            if(file_exists(public_path('upload_doc/'.$old_upload_doc)))
                            {
                                unlink(public_path('upload_doc/'.$old_upload_doc));
                            }
                        }
                        $file_image=$request->file('upload_doc');
                        $fileimage=$file_image->getClientOriginalName();
                        //$fitnesstrainer->upload_doc = $fileimage;
                        $data['upload_doc'] =$fileimage;
                        $destination=public_path("upload_doc");
                        $file_image->move($destination,$fileimage);
                    }   
                    else
                    {
                        $data['upload_doc'] =($fileimage)? $fileimage:$fitnesstrainer->upload_doc;
                    }
                $data['name']=($request->name)? $request->name:$fitnesstrainer->name;
                $data['email']=($request->email)? $request->email:$fitnesstrainer->email;
                $data['password']=($request->password)? $request->password:$fitnesstrainer->password;
                $data['phone']=($request->mobile_number)? $request->country_code.$request->mobile_number:$fitnesstrainer->phone;
                $data['gender']=($request->gender)? $request->gender:$fitnesstrainer->gender;
                $data['dob']=($request->dob)? $request->dob:$fitnesstrainer->dob;
                $data['specialization']=($request->specialization)? implode(",",$request->specialization):$fitnesstrainer->specialization;
                $data['address']=($request->adaddressd)? $request->address:$fitnesstrainer->address;
                $data['education'] =($request->education)? $request->education:$fitnesstrainer->education;
                $data['bio'] =($request->bio)? $request->bio:$fitnesstrainer->bio;

                $data['updated_at'] = date("Y-m-d h:i:s");
                $update = $fitnesstrainer->where('id',$id) ->update($data);
                if($update){
                    $result=array('status'=>true,'message'=> 'Your Trainer Record Update Successfully');
                }
                else
                {
                    $result=array('status'=>false,'message'=> 'Your Trainer Record Update Not Successfully.');
                }
            echo json_encode($result);
        } 
    }

    public function fitness_trainer_filter(Request $request)
    {
       // dd($request->status);
    
         $fitnesstrainer  =  User::where(['status'=>$request->status,'role'=>"97"])->get();
       // dd(count($fitnesstrainer));
        if(!is_null($fitnesstrainer))
        {
            $result=array('status'=>true,'data'=> $fitnesstrainer);
        }
        else
        {
            $result=array('status'=>false,'data'=> 'null');
        }
        echo json_encode($result);
    }

    public function checklogin(Request $request)
    {
        if($request->input())
        {

            $fitnesstrainer  =  User::where('email',$request->email)->first();
            
        if(!is_null($fitnesstrainer))
        {
            $fitnesstrainer  =  User::where('password',$request->password)->first();
            if(is_null($fitnesstrainer))
            {
                $result=array('status'=>false,'statuspsd'=> 'Invalid Password','check'=>"password");
            }
            else
            {
                $where =array('email'=>$request->email,'password'=>$request->password);
                $fitnesstrainer  =  User::where($where)->first();

                $request->session()->put('fitness_tranner_id', $fitnesstrainer->id);
                $request->session()->put('name', $fitnesstrainer->name);
               
                $request->session()->put('email', $fitnesstrainer->email);
                $request->session()->put('phone', $fitnesstrainer->phone);
                $request->session()->put('upload_doc', $fitnesstrainer->upload_doc);
                $request->session()->put('address', $fitnesstrainer->address);

          //  dd($fitnesstrainer);
                return redirect()->to('/fitness-trainer-login-my-profile'); 
            }
            
        }
        else
        {
            $result=array('status'=>false,'statusemail'=> 'Invalid Email address','check'=>"email");
        }
        echo json_encode($result);

        }
    }
    public function fitness_trainer_login_my_profile()
    {
    
        $result=array('status'=>true,'url'=> 'fitness_trainer_login_my_profile_view');
        echo json_encode($result);
       
    }

    public function fitness_trainer_login_my_profile_view()
    {
        $where =array('id'=>session()->get('fitness_tranner_id'));
        $fitnesstrainer  =  User::where($where)->first();
             if(is_null($fitnesstrainer->image))
        {
            $fitnesstrainer->image="1.png";
        }
    
        return view('Pages.fitnesstrainers.fitness_trainer_login_my_profile',compact('fitnesstrainer'));
    }

    public function fitness_trainer_logout()
    {
        $request->session()->forget(['fitness_tranner_id', 'name','email','mobile_number','upload_doc','address']);
        return redirect()->to('/home');
    }

    public function trainer_publishe_profile($id)
    {
        $where =array('id'=>$id);
        $fitnesstrainer  =  User::where($where)->first();
         if(is_null($fitnesstrainer->image))
        {
            $fitnesstrainer->image="1.png";
        }
        dd($fitnesstrainer);
        return view('Pages.fitnesstrainers.trainer_publishe_profile',compact('fitnesstrainer'));
    }
    
    public function trainer_edit_profile($id)
    {
        $where =array('id'=>$id);
        $fitnesstrainer  =  User::where($where)->first();
        if(is_null($fitnesstrainer->image))
        {
            $fitnesstrainer->image="1.png";
        }

        return view('Pages.fitnesstrainers.trainer_edit_profile',compact('fitnesstrainer'));
    }

    public function trainer_forgot_password()
    {
        return view('Pages.fitnesstrainers.trainer_forgot_password');
    }

    public function firness_forget_passwordcheck(Request $request )
    {
        if($request->input())
        {
            $fitnesstrainer  =  User::where('email',$request->email)->first();
            if(is_null($fitnesstrainer))
            {
                  $result=array('status'=>false,'statusemail'=> 'Invalid Email address');
            }
            else
            {
                $token=Str::random(16);
            //    $pass= new Password_reset();
           //     $pass->email=$request->email;
             //   $pass->timestamps=false;
               // $pass->token=$token;
               // $pass->created_at=Carbon::now();
            //    $created_at=Carbon::now();
              //  $pass->save();
                $c = Carbon::now();
                $data = array('email'=>$request->email,'token'=>$token,'created_at'=>$c);
                
             //   dd($data);
                DB::table('password_resets')->insert($data);
               // exit;
                $msg="";
                $subject="Password Reset Email";
                
                $test = "<h1>Reset Your Password</h1>
                    <center>Hii ".$fitnesstrainer->name ."<br />We're sending you this email because you requested a password reset. Click on this link to create a new password <br /><br /><br />";

                $message=url('')."/reset-password/".$token;
                $msg.=$test;
                $msg .= "<br><a  href='".$message."'>Set a new password</a><br /><br /><br />if you didn't request a password reset, you can ignore this email. Your password will not be changed</center>";
               
                if($this->sendMail($request->email,$subject,$msg)){
                //if(1){  
            //    $result=array('status' => true,'message' =>"Enter your email address associated with your account 
			//				we'll send you a link to reset your password.","url"=>"home");
                    $result=array('status' => true,'message' =>"Enter your email address associated with your account 
            //              we'll send you a link to reset your password.","url"=>"home");
              
              
                }else{
                    $result=array('status' => false,'message' =>"Something Went Wrong");
                }
            }
              echo json_encode($result);
            }
    }
    
    public function trainer_reset_password($token)
    {

            return view('Pages.fitnesstrainers.trainer_reset_password',compact('token'));
    }
    
    public function  trainer_updatepassword(Request $request)
    {
      
        $token_status=DB::table('password_resets')->where('token', $request->email_token)->first();
        if(is_null($token_status)){
            $result=array('status'=>false,'message' => "Token Does Not Exist");
            }
            else
            {
                //$data['password']=Hash::make($request->password);
                  $data['password']=$request->password;
                  
                DB::table('users')->where('email',$token_status->email)->update($data);
                DB::table('password_resets')->where('email',$token_status->email)->delete();
		$result=array('status'=>true,'message' =>'Password Reset Success','url'=>'signin');
            }
    echo json_encode($result);
            
            }

    public function sendMail($email,$stubject=NULL,$message=NULL){

            require base_path("vendor/autoload.php");
            $mail = new PHPMailer(true);     // Passing `true` enables exceptions
            try {
                $mail->SMTPDebug = 0;   
                $mail->isSMTP();
                $mail->Host="smtp.gmail.com";
                $mail->Port=587;
                $mail->SMTPSecure="tls";
                $mail->SMTPAuth=true;
                $mail->Username="raviappic@gmail.com";
                $mail->Password="audnjvohywazsdqo";
                $mail->addAddress($email,"User Name");
                $mail->Subject=$stubject;
                $mail->isHTML();
                $mail->Body=$message;
                $mail->setFrom("raviappic@gmail.com");
                $mail->FromName="Fitness Final";
                
                if($mail->send())
                {   
                    return 1;                 
                }
                else
                { 
                    return 0;
                }
    
            } catch (Exception $e) {
                 return 0;
            }
        }
        
    public function website_trainer_edit(Request $request)
    {

        $fitnesstrainer  =  new User();
        if(!empty($request->input()))
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'gender'=>'required',
                'mobile_number'=>'required|min:10',
                'confirm_password' => 'same:new_password',
                'specialization'=>'required',
                'address'=>'required',
                'bio'=>'required'
            ],[
                'name.required' => 'Name is required',
                'new_password.required' => 'Password is required',
                'mobile_number'=>'Please Enter Mobile Number',
                'specialization'=>'Please Enter Specialization',
                'address'=>"please Enter Address",
                'bio'=>"please Enter Bio"
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
            else
            {
                $old_password = $request->old_password;
                if(!empty($request->input()))
                {
                    $id = $request->id;
                    $fitnesstrainer  =  $fitnesstrainer->where('id',$id)->first();
                    if(!empty($old_password))
                    {
                        if($fitnesstrainer->password==$old_password)
                        {
                            if(!empty($old_password))
                            {
                                if($fitnesstrainer->password==$old_password)
                                {
                                    $fitnesstrainer->passowrd = $request->new_password;
                                    $data =array();
                                    $id = $request->id;
                                    $old_password = $request->old_password;
                                    $old_upload_doc = $request->old_upload_doc;
            
                                    $fitnesstrainer  =  $fitnesstrainer->where('id',$id)->first();
                                    
                                  
                                        
                                        $data['upload_doc'] =$fitnesstrainer->upload_doc;
                                    $data['name']=($request->name)? $request->name:$fitnesstrainer->name;
                                    $data['email']=($request->email)? $request->email:$fitnesstrainer->email;
                                    $data['password']=($request->password)? $request->password:$fitnesstrainer->password;
                                   
                                    $data['country_code']=($request->country_code)? $request->country_coder:$fitnesstrainer->country_code;
                                   
                                    $data['phone']=($request->mobile_number)? $request->country_code.$request->mobile_number:$fitnesstrainer->phone;
                                    $data['gender']=($request->gender)? $request->gender:$fitnesstrainer->gender;
                                    $data['dob']=($request->dob)? $request->dob:$fitnesstrainer->dob;
                                    $data['specialization']=($request->specialization)? implode(",",$request->specialization):$fitnesstrainer->specialization;
                                    $data['address']=($request->adaddressd)? $request->address:$fitnesstrainer->address;
                                    $data['education'] =($request->education)? $request->education:$fitnesstrainer->education;
                                    $data['bio'] =($request->bio)? $request->bio:$fitnesstrainer->bio;
            
                                    $data['updated_at'] = date("Y-m-d h:i:s");
                                }
                            }
                        }
                    }
                    else
                    {
                        $data =array();
                        $id = $request->id;
                        $old_password = $request->old_password;
                        $old_upload_doc = $request->old_upload_doc;

                        $fitnesstrainer  =  $fitnesstrainer->where('id',$id)->first();
                        
                      
                            
                            $data['upload_doc'] =$fitnesstrainer->upload_doc;
                        $data['name']=($request->name)? $request->name:$fitnesstrainer->name;
                        $data['email']=($request->email)? $request->email:$fitnesstrainer->email;
                        $data['password']=($request->password)? $request->password:$fitnesstrainer->password;
                         $data['country_code']=($request->country_code)? $request->country_coder:$fitnesstrainer->country_code;
                                   
                        $data['phone']=($request->mobile_number)?$request->mobile_number:$fitnesstrainer->phone;
                        $data['gender']=($request->gender)? $request->gender:$fitnesstrainer->gender;
                        $data['dob']=($request->dob)? $request->dob:$fitnesstrainer->dob;
                        $data['specialization']=($request->specialization)? implode(",",$request->specialization):$fitnesstrainer->specialization;
                        $data['address']=($request->adaddressd)? $request->address:$fitnesstrainer->address;
                        $data['education'] =($request->education)? $request->education:$fitnesstrainer->education;
                        $data['bio'] =($request->bio)? $request->bio:$fitnesstrainer->bio;

                        $data['updated_at'] = date("Y-m-d h:i:s");
                    }
                  
                        
                        $update = $fitnesstrainer->where('id',$id) ->update($data);
                        if($update){
                            return redirect()->to("/fitness_trainer_login_my_profile_view")
                            
                            ->with('message','Your Trainer Record Update Successfully');
                        }
                }

            }
       
        } 
    }

    public function website_trainer_change_password(Request $request)
    {
        $fitnesstrainer  =  new User();
        if(!empty($request->input()))
        {
            $validator = Validator::make($request->all(), [
                'old_password' => 'required|min:6',
                'new_password' => 'required|min:6',
                'confirm_password'=>'required|same:new_password|min:6',
                'id'=>'required',
            ],[
                'old_password.required' => 'Current Password is required',
                'new_password.required' => 'New Password is required',
                'old_password.min' => 'Current Password is Minimum of 6 digits',
                'new_password.min' => 'New Password is Minimum of 6 digits',
                'confirm_password.required'=>'Confirm Password is same as New Password',
                'confirm_password.min'=>'Confirm Password is Minimum of 6 digits',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
            else
            {
              
                    $id =$request->id;
                    $fitnesstrainer  =  $fitnesstrainer->where('id',$id)->where('password',$request->old_password)->first();
                    if($fitnesstrainer){
                        $data =array();
                    $data['password']=($request->new_password)? $request->new_password:$fitnesstrainer->new_password;
                    $data['updated_at'] = date("Y-m-d h:i:s");
                    $update = $fitnesstrainer->where('id',$id) ->update($data);
                    if($update){
                            return redirect()->back()
                            
                            ->with('message','Your Password Record Update Successfully');
                        }
                    }else{
                        return redirect()->back()
                            
                            ->with('message','Your Old Password Is not Match');
                    }
                    
                

            }
       
        } 
    }
}
