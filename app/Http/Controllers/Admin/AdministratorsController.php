<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Administrators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Crypt;
use Mail;

class AdministratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $result['super_admin']=DB::table('admins')
                ->orderBy('id','asc')
                ->get();
         return view('admin/administrators/administrators',$result);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin/administrators/add-administrators');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
           $request->validate([
            'username'=>'required|unique:admins,username',
            'email'=>'required|unique:admins,email',
            'password'=>'required',
           ]);
    
            $arr=[
                "username"=>$request->username,
                "email"=>$request->email,
                "password"=>Hash::make($request->password),
                "created_at"=>date('Y-m-d h:i:s'),
                "updated_at"=>date('Y-m-d h:i:s'),
            ];
            DB::table('admins')->insert($arr);
            $request->session()->flash('msg','successfully Added');
            return redirect('admin/administrators');
           
        

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrators  $administrators
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Administrators $administrators,$id)
    {
         $result['super_admin']=DB::table('admins')
                ->where(['id'=>$request->id])
                ->get();
         return view('admin/administrators/edit-administrators',$result);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrators  $administrators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrators $administrators,$id)
    {
        DB::table('admins')
        ->where(['id'=>$request->id])
        ->update(
            [
                'password'=>Hash::make($request->password),
            ]
        );
        $request->session()->flash('msg','Successfull Updated');
        return redirect('admin/administrators');     
    }

    
}
