<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Front\Front;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Storage;
use Crypt;
use Mail;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('front.index');
    }

    public function userlogin()
    {
       return view('front/user/signin');
    } 
    public function usersignup()
    {
       return view('front/user/signup');
    } 
     public function userlogindit()
    {
       return redirect('user/signin');  
    }        
     public function userloginre()
    {
       return redirect('user/signin');  
    } 
     public function usersignin()
    {
       return redirect('user/signin');  
    } 

     public function usersignupdit()
    {
       return redirect('user/signup');  
    } 

     public function dashboard()
    {
       return view('front/user/dashboard');  
    } 

    public function registration(Request $request)
    {

       $request->validate([
        'name'=>'required',
        'email'=>'required|unique:customers,email',
        'password'=>'required',
       ]);

        $rand_id=rand(111111111,999999999);
        $arr=[
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Crypt::encrypt($request->password),
            "status"=>1,
            "is_verify"=>0,
            "is_forgot_password"=>0,
            "rand_id"=>$rand_id,
            "created_at"=>date('Y-m-d h:i:s'),
            "updated_at"=>date('Y-m-d h:i:s')
        ];
        $query=DB::table('customers')->insert($arr);
        if($query){

            $data=['name'=>$request->name,'rand_id'=>$rand_id];
            $user['to']=$request->email;
            Mail::send('front/email_verification',$data,function($messages) use ($user){
                $messages->to($user['to']);
                $messages->subject('Email Id Verification');
            });

            $request->session()->flash('msgs','Registration Completed. Please check your email id for verification');
            return redirect('user/signup'); 
        }       
 

   }



    public function email_verification(Request $request,$id)
    {
        $result=DB::table('customers')  
            ->where(['rand_id'=>$id])
            ->where(['is_verify'=>0])
            ->get(); 

        if(isset($result[0])){
            DB::table('customers')  
            ->where(['id'=>$result[0]->id])
            ->update(['is_verify'=>1,'rand_id'=>'']);
            $request->session()->flash('msgss','Successfully email verified. Please sign in your account');
            return redirect('user/signin'); 
        }else{
            return redirect('user/signin'); 
        }
    }


   public function loginprocess(Request $request)
    {
       
        $result=DB::table('customers')  
            ->where(['email'=>$request->email])
            ->get(); 
        
        if(isset($result[0])){
            $db_pwd=Crypt::decrypt($result[0]->password);
            $status=$result[0]->status;
            $is_verify=$result[0]->is_verify;

            if($is_verify==0){

                $request->session()->flash('msgs','Please verify your email id');
                return redirect('user/signin'); 
            }
            elseif($status==0){
              
                $request->session()->flash('msgs','Your account has been deactivated');
                return redirect('user/signin'); 
            }else{

                if($db_pwd==$request->password){

                    $request->session()->put('FRONT_USER_LOGIN',true);
                    $request->session()->put('FRONT_USER_ID',$result[0]->id);
                    $request->session()->put('FRONT_USER_NAME',$result[0]->name);
                    return redirect('user/dashboard');  
                    
                }else{
                    $request->session()->flash('msg','Please enter valid password');
                    return redirect('user/signin'); 
                }  

            }


        }else{
            $request->session()->flash('msgs','Please enter valid information');
            return redirect('user/signin');
        }
       //$request->password
    }




    public function forgotpass(){
        return view('front/user/forgotpassword');
    }


    public function resetpassword(Request $request)
    {
        
        $result=DB::table('customers')  
            ->where(['email'=>$request->forgot_email])
            ->get(); 
        $rand_id=rand(111111111,999999999);
        if(isset($result[0])){

            DB::table('customers')  
                ->where(['email'=>$request->forgot_email])
                ->update(['is_forgot_password'=>1,'rand_id'=>$rand_id]);

            $data=['name'=>$result[0]->name,'rand_id'=>$rand_id];
            $user['to']=$request->forgot_email;
            Mail::send('front/forgot_email',$data,function($messages) use ($user){
                $messages->to($user['to']);
                $messages->subject("Forgot Password");
            });
            $request->session()->flash('msgs','Please check your email for reset password'); 
            return redirect('user/forgot-password');
        }else{
            $request->session()->flash('msgs','Email id not registered'); 
            return redirect('user/forgot-password');          
        }
    }


    public function forgot_password_change(Request $request,$id)
    {
        $result=DB::table('customers')  
            ->where(['rand_id'=>$id])
            ->where(['is_forgot_password'=>1])
            ->get(); 

        if(isset($result[0])){
            $request->session()->put('FORGOT_PASSWORD_USER_ID',$result[0]->id);
        
            return view('front/user/forgot-password-change');
        }else{
            return redirect('user/forgot-password');
        }
    }

    public function forgot_password_change_process(Request $request)
    {
        DB::table('customers')  
            ->where(['id'=>$request->session()->get('FORGOT_PASSWORD_USER_ID')])
            ->update(
                [
                    'is_forgot_password'=>0,
                    'password'=>Crypt::encrypt($request->reset_new_password)   ,
                    'rand_id'=>''
                ]
            ); 
           $request->session()->flash('msgss','Password Change Successfully. Please sign in'); 
        return redirect('user/signin');      
    }






 






















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
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
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function show(Front $front)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Front $front)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Front  $front
     * @return \Illuminate\Http\Response
     */
    public function destroy(Front $front)
    {
        //
    }
}
