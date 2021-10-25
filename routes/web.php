<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'homepage'])->name('home');
Route::get('/', function () {
    return view('welcome');
});
 Route::get('/fit-plans',[App\Http\Controllers\FitplansController::class, 'index']);
  Route::get('/getdata_fit_plans',[App\Http\Controllers\FitplansController::class, 'getdata_fit_plans']);


   Route::get('/fit-plans-detail/{tainerid}/{id}',[App\Http\Controllers\FitplansController::class, 'fit_plans_detail']);
   Route::get('/payment-workout-by-yourself/{id}',[App\Http\Controllers\FitplansController::class, 'workout_payment']);
     Route::get('/fit-plan-by-yourself-after-payment/{id}',[App\Http\Controllers\FitplansController::class, 'after_payment']);



//Route::get('/search_fitplans/{search}',[App\Http\Controllers\FitplansController::class, 'search_fitplans']);
Route::post('/search_fitplans',[App\Http\Controllers\FitplansController::class, 'search_fitplans'])->name("search_fitplans");
// Route::group(['middleware' => 'prevent-back-history'],function(){

Route::post('/filter_fitplans',[App\Http\Controllers\FitplansController::class, 'filter_fitplans'])->name("filter_fitplans");


//******************************website************************

Route::group(['middleware'=>'firnesstrainer'],function(){
   
    Route::post('/leave_manage',[App\Http\Controllers\leaveManageController::class, 'leave_manage'])->name("leave_manage");
        Route::get('/getAllleave_manage',[App\Http\Controllers\leaveManageController::class, 'getAllleave_manage']);
         Route::get('/leaveonoff',[App\Http\Controllers\leaveManageController::class, 'leaveonoff']);
        
    Route::get('/trainer-edit-profile/{id}',[App\Http\Controllers\FitnessTrainerController::class, 'trainer_edit_profile']);

Route::get('/trainer-publishe-profile/{id}',[App\Http\Controllers\FitnessTrainerController::class, 'trainer_publishe_profile']);
    Route::get('/fitness_trainer_login_my_profile_view',[App\Http\Controllers\FitnessTrainerController::class, 'fitness_trainer_login_my_profile_view']);
    Route::Post('/website_trainer_edit',[App\Http\Controllers\FitnessTrainerController::class, 'website_trainer_edit'])->name('website_trainer_edit');
Route::Post('/website_trainer_change_password',[App\Http\Controllers\FitnessTrainerController::class, 'website_trainer_change_password'])->name('website_trainer_change_password');

///=--------------------------Set-Availability------------------------------------------------

Route::get('/Set-Availability',[App\Http\Controllers\SetAvailabilityController::class, 'index']);

Route::Post('/firness_trainer_time_slot',[App\Http\Controllers\SetAvailabilityController::class, 'firness_trainer_time_slot'])->name('firness_trainer_time_slot');

Route::Post('/edit_firness_trainer_time_slot',[App\Http\Controllers\SetAvailabilityController::class, 'edit_firness_trainer_time_slot'])->name('edit_firness_trainer_time_slot');

Route::Post('/add_firness_trainer_set_working_day',[App\Http\Controllers\SetAvailabilityController::class, 'add_firness_trainer_set_working_day'])->name('add_firness_trainer_set_working_day');


});
   

Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index']);

Route::get('/Be-a-Trainer', [App\Http\Controllers\FitnessTrainerController::class, 'index']);

//----------------------------fitness-trainer-data---------------------------

Route::post('/fitness-trainer-data',[App\Http\Controllers\FitnessTrainerController::class, 'fitness_trainer_data'])->name('fitness-trainer-data');

Route::post('/set_password_fitness_trainer',[App\Http\Controllers\FitnessTrainerController::class, 'set_password_fitness_trainer'])->name('set_password_fitness_trainer')->middleware('auth');

Route::get('/fitness_trainer_edit/{id}',[App\Http\Controllers\FitnessTrainerController::class, 'fitness_trainer_edit'])->name('fitness_trainer_edit')->middleware('auth');

Route::post('/fitness_trainer_delall',[App\Http\Controllers\FitnessTrainerController::class, 'deleteAll'])->name('fitness_trainer_delall')->middleware('auth');

Route::get('/fitness_trainer_del/{id}',[App\Http\Controllers\FitnessTrainerController::class, 'delete'])->name('fitness_trainer_del')->middleware('auth');


Route::get('/fitness_trainer_view/{id}',[App\Http\Controllers\FitnessTrainerController::class, 'fitness_trainer_view'])->name('fitness_trainer_view')->middleware('auth');

Route::post('/firness_trainer_edit/',[App\Http\Controllers\FitnessTrainerController::class, 'firness_trainer_update'])->name('firness_trainer_edit')->middleware('auth');

Route::post('/fitness_trainer_filter',[App\Http\Controllers\FitnessTrainerController::class, 'fitness_trainer_filter'])->name('fitness_trainer_filter')->middleware('auth');

Route::post('/fitness_trainer_signin',[App\Http\Controllers\FitnessTrainerController::class, 'checklogin'])->name('fitness_trainer_signin');

Route::get('/fitness-trainer-login-my-profile',[App\Http\Controllers\FitnessTrainerController::class, 'fitness_trainer_login_my_profile'])->name('fitness-trainer-login-my-profile');


Route::get('/fitness_trainer_logout',[App\Http\Controllers\FitnessTrainerController::class, 'fitness_trainer_logout']);





Route::get('/trainer-forgot-password',[App\Http\Controllers\FitnessTrainerController::class, 'trainer_forgot_password']);

Route::post('/firness_forget_passwordcheck',[App\Http\Controllers\FitnessTrainerController::class, 'firness_forget_passwordcheck'])->name('firness_forget_passwordcheck');

Route::get('/reset-password/{token}',[App\Http\Controllers\FitnessTrainerController::class, 'trainer_reset_password']);

Route::Post('/trainer_updatepassword',[App\Http\Controllers\FitnessTrainerController::class, 'trainer_updatepassword'])->name('trainer_updatepassword');


Route::get('/emailverification', function () {
   return view('Pages.email-verification');
});


Route::get('/signup', function () {
    return view('/signup');
});

Route::get('/signin', function () {
       Session::forget('fitness_tranner_id');
   Session::forget('name');
   Session::forget('email');
   Session::forget('mobile_number');
   Session::forget('upload_doc');
   Session::forget('address');
    return view('/signin');
});

//******************************website************************

  
if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
   Route::get('/login', [App\Http\Controllers\backend\Admin::class, 'index'])->name('login');
}else{
   Route::get('/', [App\Http\Controllers\backend\Admin::class, 'dashboard'])->middleware('auth');

}


Route::get('/dashboard', [App\Http\Controllers\backend\Admin::class, 'dashboard'])->middleware('auth'); 

//--------------------------------workout_plans---------------------------------
Route::get('workout_plans',[App\Http\Controllers\backend\workoutPlansController::class, 'index'])->middleware('auth');

Route::get('add_workout_plan',[App\Http\Controllers\backend\workoutPlansController::class, 'add_workout_plan_view'])->middleware('auth');
Route::post('/workout_plan_store',[App\Http\Controllers\backend\workoutPlansController::class, 'store'])->name('workout_plan_store')->middleware('auth');

Route::get('/workout_plans_del/{id}',[App\Http\Controllers\backend\workoutPlansController::class, 'delete'])->name('workout_plans_del')->middleware('auth');

Route::post('/workoutplansAll',[App\Http\Controllers\backend\workoutPlansController::class, 'deleteAll'])->name('workoutplansAll')->middleware('auth');
Route::any('/workout_plans_edit/{id}', [App\Http\Controllers\backend\workoutPlansController::class, 'edit'])->name('workout_plans_edit')->middleware('auth');

Route::post('/workout_plan_update',[App\Http\Controllers\backend\workoutPlansController::class, 'workout_plan_update'])->name('workout_plan_update')->middleware('auth');

Route::post('/workout_plans_active_desctive',[App\Http\Controllers\backend\workoutPlansController::class, 'workout_plans_active_desctive'])->name('workout_plans_active_desctive')->middleware('auth');

//--------------------------------FitnessTrainer Start---------------------------------
Route::get('manager_firness_trainers',[App\Http\Controllers\FitnessTrainerController::class, 'getdata'])->middleware('auth');
// });
// if(empty(session('user_id')) && empty(session('user_id')) && empty(session('user_id'))){
//    Route::get('/login', [App\Http\Controllers\backend\Admin::class, 'index'])->name('login');
// }else{
//    Route::get('/', [App\Http\Controllers\backend\Admin::class, 'dashboard']);

// }

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\backend\Admin::class, 'index'])->name('login');
Route::get('/', [App\Http\Controllers\backend\Admin::class, 'dashboard'])->middleware('auth');; 

Route::post('custom-login', [App\Http\Controllers\backend\Admin::class, 'customLogin'])->name('login.custom'); 
Route::get('signout', [App\Http\Controllers\backend\Admin::class, 'signOut'])->name('signout')->middleware('auth');



Route::post('/user_change_password', [App\Http\Controllers\backend\userController::class, 'user_change_password'])->name('user_change_password'); 
Route::post('/update_admin_profile', [App\Http\Controllers\backend\userController::class, 'update_admin_profile'])->name('update_admin_profile');  








Route::get('/fitness-survey', function () {
   return view('Pages.fitness-survey');
});
//user manage//


 Route::get('/user_list', [App\Http\Controllers\backend\userController::class, 'index'])->name('user_list')->middleware('auth'); 
 Route::get('/add_user', [App\Http\Controllers\backend\userController::class, 'create'])->name('add_user')->middleware('auth');
 Route::post('store-data', [App\Http\Controllers\backend\userController::class, 'store'])->name('store-data')->middleware('auth');
 Route::get('/user_view/{id}', [App\Http\Controllers\backend\userController::class, 'userView'])->middleware('auth');
 Route::get('/user_edit/{id}', [App\Http\Controllers\backend\userController::class, 'edit'])->name('user_edit')->middleware('auth');
 Route::post('/update_data/', [App\Http\Controllers\backend\userController::class, 'updateData'])->middleware('auth');
 Route::post('/changeStatus/{id}', [App\Http\Controllers\backend\userController::class, 'changeStatus'])->name('changeStatus')->middleware('auth');
 //Route::DELETE('/user_delete/{id}', [App\Http\Controllers\backend\userController::class, 'delete'])->name('user_delete');
 Route::get('/user_delete/{id}', [App\Http\Controllers\backend\userController::class, 'delete'])->name('user_delete')->middleware('auth');
//ravi sir
 Route::post('/signup', 'App\Http\Controllers\Api\userController@signUp'); 
 Route::post('/verify_otp', 'App\Http\Controllers\Api\userController@verifyOtp')->name('verify_otp');
//  Route::post('/fitness-survey_three', 'App\Http\Controllers\Api\userController@fitness_survey')->name('fitness-survey_three');  
 Route::get('/user-view/{id}', 'App\Http\Controllers\backend\userController@userview');
 Route::post('/fitness_survey_one', 'App\Http\Controllers\Api\userController@fitness_one')->name('fitness_survey_one');
 Route::post('/fitness_survey_two', 'App\Http\Controllers\Api\userController@fitness_two')->name('fitness_survey_two');
 Route::post('/fitness_survey_three', 'App\Http\Controllers\Api\userController@fitness_survey')->name('fitness_survey_three');  
