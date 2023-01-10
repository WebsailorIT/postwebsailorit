<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdministratorsController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\MyprofileController;
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



//front end all route start

Route::get('/',[FrontController::class,'index']);
Route::get('user/signin',[FrontController::class,'userlogin']);
Route::get('/login',[FrontController::class,'userlogindit']);
Route::get('/user',[FrontController::class,'userloginre']);
Route::get('/signin',[FrontController::class,'usersignin']);
Route::get('user/signup',[FrontController::class,'usersignup']);
Route::get('/signup',[FrontController::class,'usersignupdit']);




Route::post('registration-process',[FrontController::class,'registration'])->name('front.registration');
Route::post('login-process',[FrontController::class,'loginprocess'])->name('front.login');
Route::get('/verification/{id}',[FrontController::class,'email_verification']);
Route::get('user/forgot-password',[FrontController::class,'forgotpass']);
Route::post('reset-password-process',[FrontController::class,'resetpassword'])->name('reset.password');
Route::get('user/forgot-password-change/{id}',[FrontController::class,'forgot_password_change']);
Route::post('forgot_password_change_process',[FrontController::class,'forgot_password_change_process'])->name('resetnew.password');;

Route::get('user/logout', function () {
    session()->forget('FRONT_USER_LOGIN');
    session()->forget('FRONT_USER_ID');
    session()->forget('FRONT_USER_NAME');
    session()->forget('USER_TEMP_ID');
    return redirect('user/signin');
});






 Route::group(['middleware'=>'user_auth'],function(){
    Route::get('user/dashboard',[FrontController::class,'dashboard']);
    Route::get('user/my-profile',[MyprofileController::class,'myprofile']);
    Route::post('user/save-profile',[MyprofileController::class,'profilestore'])->name('profile.insert');
    Route::post('user/update-profile/',[MyprofileController::class,'profileupdate'])->name('profile.update');




 });







//front end all route end





//admin all route start
Route::get('/admin',[AdminController::class,'adminlogin']);
Route::get('admin/login',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){


   Route::get('admin/dashboard',[AdminController::class,'dashboard']);
   Route::get('admin/administrators',[AdministratorsController::class,'index']);
   Route::get('admin/administrators/add-administrators',[AdministratorsController::class,'create']);
   Route::post('admin/save-administrators',[AdministratorsController::class,'store'])->name('administrators.insert');
   Route::get('admin/administrators/{id}',[AdministratorsController::class,'edit']);
   Route::post('admin/update-password/{id}',[AdministratorsController::class,'update'])->name('administrators.update');
   Route::get('admin/posts',[PostsController::class,'index']);

   

   Route::get('admin/categories',[CategoryController::class,'index']);
   Route::get('admin/categories/add-category',[CategoryController::class,'create']);
   Route::post('admin/save-category',[CategoryController::class,'store'])->name('category.insert');
   Route::get('admin/categories/{id}',[CategoryController::class,'edit']);
   Route::post('admin/update-category/{id}',[CategoryController::class,'update'])->name('category.update');
   Route::get('admin/categories/delete/{id}',[CategoryController::class,'destroy']);

   Route::get('admin/logout', function () {
      session()->forget('ADMIN_LOGIN');
      session()->forget('ADMIN_ID');
      session()->forget('ADMIN_NAME');
      session()->flash('msgs','Logout Sucessfully');
      return redirect('admin/login');  
   }); 

});

//admin all route end






//Route::get('admin/updatepass',[AdminController::class,'updatepass']);