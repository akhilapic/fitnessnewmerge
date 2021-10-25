<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Admin extends Controller
{
    public function index()
    {
        return view('Pages.login');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        // print_r($credentials);
        // exit;
        if (Auth::attempt($credentials)) {
            $user = User::where("email",$request->email)->first();
          //  dd( $user->name);
             $request->session()->put('id',$user->id);
            $request->session()->put('name',$user->name);
            $request->session()->put('email',$user->email);
            $request->session()->put('user_id',$user->id);
            $request->session()->put('role',$user->role);
            $request->session()->put('use_image',$user->use_image);
            $request->session()->put('phone',$user->phone);

          return redirect()->to('/dashboard') ->withSuccess('Signed in');
          
          //  return redirect()->intended('dashboard')
            //            ->withSuccess('Signed in');
        }
    return redirect()->back()->with('msg', 'Login details are not valid');  
        //return redirect("login")->with('','');
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('Pages.dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function signOut() {
        Session::flush();
        Auth::logout();
        return Redirect('login'); //redirect back to login
    }
    
    
}
