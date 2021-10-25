<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Hash;
use App\Models\User;
class userController extends Controller
{
    public function index()
    {
        $users = User::where("role",99)->get();
        // $users = DB::table('users')->get();
        return view('Pages.customer', compact('users'));
    }
    public function create() {
        return view('pages.user-create');
   }

   public function store(Request $request)
    {
        $user =new  User();
        $validatedData = $request->validate([
          'name' => 'required',
          'email' => 'required',
          'username' => 'required',
          'password' => 'required'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->password =Hash::make($request->password);
        $user->status = 1;

         
        // $nameTaken = DB::table('users')->where('username', $request->username)->count();
        // $emailTaken = DB::table('users')->where('email', $request->email)->count();

        $nameTaken = $user->where('username', $request->username)->count();
        $emailTaken = $user->where('email', $request->email)->count();

        if($nameTaken > 0){
            $result=array('statusname'=> false,'message'=> 'Username is allready taken.');
        }
        elseif($emailTaken > 0){
            $result=array('statusemail'=> false,'message'=> 'Email is allready taken.');
        }
        else{
            $user->updated_at = date("Y-m-d h:i:s");
            $user->created_at = date("Y-m-d h:i:s");
    //        $data = ['name' => $user->name,'email' => $user->email,'username' => $user->$username,'status' => $status,'password' => $password,'created_at' => $date,'updated_at' => $date];
           
    
         
            $fileimage="";
            $image_url='';
        if($request->hasfile('image')){
                
            $file_image=$request->file('image');
            
            $fileimage=$file_image->getClientOriginalName();
            $user->image = $fileimage;
            $destination=public_path("images");
            $file_image->move($destination,$fileimage);
        //   $image_url=url('public/images').'/'.$filename;
            
        }    
        $user->role="99";
        $users =  $user->save();
            if($users){
                $result=array('status'=>true,'message'=> 'Data Insert Successfully.');
            }
            else{
                $result=array('status'=>false,'message'=> 'Data Insert Not Successfully.');
            }
    }
       echo json_encode($result);
    }

    public function userview(Request $request,$id){
    $id = $request->id;
    $user = DB::table('users')->where('id', $id)->first();
    return view('Pages.master.user_view',compact('user'));
}
/*
   public function userView($id){
   
    $userdata = User::where('id',$id)->first();
 
  //  $userdata = DB::table('users')->where('id',$id)->first();
    $reponse ="<div class='row'><div class='col-12'>'<div class='card'><div class='card-body border'>
    <div class='profile_box'><img src='assets/admin/images/theme/user.png' class='profile_img'>
    <div class='profile_box_body'>
    <h4>$userdata->username</h4>
    <a href='javascript:void(0);'><i class='mdi mdi-email-outline'></i> $userdata->email</a>
    <a href='javascript:void(0);'><i class='mdi mdi-phone'></i>$userdata->name</a>
    <a href='javascript:void(0);'><i class='mdi mdi-map-marker'></i> Melbourne</a>
    <p class='mb-0'>I distinguish three main text objectives could be merely to inform people. A second could be persuade people. You want people to bay objective.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class='col-md-12'>
    <div class='card'>
    <div class='card-body border'><div>
    <ul class='nav nav-pills' role='tablist'><li class='nav-item'>
    <a class='nav-link active' data-bs-toggle='tab' href='#home' role='tab'><span>User Details</span></a></li></ul>
    <div class='tab-content pt-3'>
                <div class='tab-pane active' id='home' role='tabpanel'>
                <table class='table table-bordered table_fix_width'>
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>$userdata->name</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>$userdata->email</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>$userdata->username</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>
             </div>
             </div>
    </div>"; 
    return $reponse;

    }*/
   
    public function delete(Request $request, $id)
    {
       
        $id = $request->id;
        $user = User::where('id',$id)->delete();
        return redirect('/user_list');
   }
    
    public function edit($id){
        $users = User::where('id',$id)->first();

       // $users = DB::table('users')->where('id',$id)->first();
        return view('Pages.user-edit', compact('users'));
       
    }
    
    public function changeStatus(Request $request){
        $id = $request->user_id;
        $status = $request->status;
        $data = ['status'=>$status];
        $update =  DB::table('users')->where('id',$id)->update($data);
        if($update){
            $result = array("status"=> true, "message"=>"update status");
        }
        else{
            $result = array("status"=> false, "message"=>"not update status");
        }
    }
    /*
    
    public function updateData(Request $request,$id)
    {   
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required'
          ]);
        $user =new  User();
        $user->name =$request->name;

        $name = $request->name;
        $email = $request->email;
        $user->email =$request->email;

        $username = $request->username;
        $user->username =$request->username;
        $fileimage="";
        $image_url='';
     if($request->hasfile('image')){
             
         $file_image=$request->file('image');
         
         $fileimage=$file_image->getClientOriginalName();
         
         $destination=public_path("images");
         $file_image->move($destination,$fileimage);
      //   $image_url=url('public/images').'/'.$filename;
         
     }
        $nameExists=   $user->where('id','<>',$id)->where('username',$username)->count();
        $emailExists =  $user->where('id','<>',$id)->where('email',$email)->count();
        
       // $nameExists =  DB::table('users')->where('id','<>',$id)->where('username',$username)->count();
       // $emailExists =  DB::table('users')->where('id','<>',$id)->where('email',$email)->count();
        
        if($nameExists > 0){
            $result = array("statusName"=> true, "message"=>"Username is allready exists");
        }elseif($emailExists > 0){
            $result = array("statusEmail"=> true, "message"=>"Email is allready exists");
        }
        else{

            $before = $user->where('id',$id)->first();
            //$before = DB::table('users')->where('id',$id)->first();
            $date = date("Y-m-d h:i:s");
            
            if($before){
                $data = ['role'=>"99",'image'=>$fileimage? $fileimage:$before->image , 'name'=>$name ? $name : $before->name,'email'=>$email ? $email : $before->email,'username'=>$username ? $username : $before->username,'updated_at'=>$date];
               // $update =  DB::table('users')->where('id',$id)->update($data);
               $update = $user->where('id',$id) ->update($data);
                if($update){
                    $result = array("status"=> true, "message"=>"User update success");
                }
                else{
                    $result = array("status"=> false, "message"=>"User not update success");
                }
            }
            else{
                 $result = array("status"=> false, "message"=>"User not cupdate success");
            }    
        }
       echo json_encode($result);
    }*/
//ravi sir
    public function updateData(Request $request)
    {   
        $validatedData = $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required'
          ]);
          $id=$request->user_id;
          $name = $request->name;
          $email = $request->email;
          $phone = $request->phone;
          $language = $request->language;

     $nameExists =  DB::table('users')->where('id',$id)->where('name',$name)->count();
     $emailExists =  DB::table('users')->where('id',$id)->where('email',$email)->count();
        
        
        // if($nameExists > 0){
        //     $result = array("statusName"=> true, "message"=>"Username is allready exists");
        // }elseif($emailExists > 0){
        //     $result = array("statusEmail"=> true, "message"=>"Email is allready exists");
        // }
        // else{

            $before = DB::table('users')->where('id',$id)->first();
            $date = date("Y-m-d h:i:s");
            
            if($before){
                $data = $data = ['name'=>$name ? $name : $before->name,'email'=>$email ?
                 $email : $before->email,'phone'=>$phone ? $phone : $before->phone, 'language'=>$language ? $language : $before->language,'updated_at'=>$date];;
               // $update =  DB::table('users')->where('id',$id)->update($data);
               $update =  DB::table('users')->where('id',$id)->update($data);
                if($update){
                    $result = array("status"=> true, "message"=>"User update success");
                }
                else{
                    $result = array("status"=> false, "message"=>"User not update success");
                }
            }
            else{
                 $result = array("status"=> false, "message"=>"User not cupdate success");
            }    
        // }
       echo json_encode($result);
    }
    public function user_change_password(Request $request)
    {
        if(!empty($request->input()))
        {
            $old_password = $request->old_password;
            $new_password = $request->new_password;
            $id = $request->id;
            $users =  new User();
            $user =   $users->where("id",$id)->first();
        if (!$user) {
            $result = array("status"=> false, "message"=>"invalid old password");
            
         }
         if (!Hash::check($old_password, $user->password)) {
            $result = array("status"=> false, "message"=>"invalid old password");
         }
         else{
            
            $result = array("status"=> false, "message"=>"invalid old password");
            $data['password'] = Hash::make($new_password);
          
            $update = $user->where('id',$id) ->update($data);
            $result = array("status"=> true, "message"=>"change password Successfully");
     
         }
         echo json_encode($result);
        }
    }
    
      public function update_admin_profile(Request $request)
        {
             if(!empty($request->input()))
            {
                $id = $request->id;
                $users =  new User();
                $user =   $users->where("id",$id)->first();
                $data['name'] = $request->name;
                $update = $user->where('id',$id) ->update($data);
                if($update)
                {
                    $result = array("status"=> true, "message"=>"Profile Update Successfully");
                }
                else
                {
                    $result = array("status"=> true, "message"=>"Profile Update Fail");
                }
            }
            echo json_encode($result);
            } 
    
}
