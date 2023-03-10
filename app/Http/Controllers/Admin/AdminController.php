<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Crypt;
use Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->session()->has('ADMIN_LOGIN')){
          return redirect('admin/dashboard');  
       }else{
           return view('admin.login');
       }        
        
       return view('admin.login');
    }

     public function adminlogin(Request $request)
    {
       return redirect('admin/login');   
    }   
    
    public function auth(Request $request)
    {
        $request->validate([
        'email'=>'required',
        'password'=>'required'
       
       ]);
       
       $username=$request->post('username');
       $email=$request->post('email');
       $password=$request->post('password');
       
       //$result=Admin::where(['email'=>$email,'password'=>$password])->get();
       
       
         $result=Admin::where(['email'=>$email])->first();
       
           if($result){
               if(Hash::check($request->post('password'),$result->password)){
                   $request->session()->put('ADMIN_LOGIN',true);
                   $request->session()->put('ADMIN_NAME',$result->username);
                   $request->session()->put('ADMIN_ID',$result->id);
                   //$request->session()->flash('dmsg','Sucessfully Logged in');
                   return redirect('admin/dashboard');  
               }else{
                   $request->session()->flash('msg','Please enter valid Password');
                   return redirect('admin/login');                   
               }
               
           }else{
               $request->session()->flash('msg','Please enter valid login details');
               return redirect('admin/login');
           }
       
       
       
       
       
    }  


    public function dashboard()
    {
       return view('admin.dashboard');
    }



    /**
     * 
    public function updatepass()
    {
      $r=Admin::find(1);
      $r->password=Hash::make('nomancste123@');
      $r->save();
    }
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
