<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Front\Myprofile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Storage;
use Crypt;
use Mail;

class MyprofileController extends Controller
{



    public function myprofile(Request $request)
    {
     $uid=$request->session()->get('FRONT_USER_ID');   
     $result['my_profile']=DB::table('myprofiles')  
        ->where(['user_id'=>$uid])
        ->get();        
       return view('front.user.my-profile',$result);  
    } 



    public function profilestore(Request $request)
    {
       $uid=$request->session()->get('FRONT_USER_ID');  
       $request->validate([
        'profile_image'=>'mimes:jpeg,jpg,png',
        'cover_image'=>'mimes:jpeg,jpg,png',
       ]);

        if($request->hasfile('profile_image')){
           $image=$request->file('profile_image');
           $ext=$image->extension();
           $image_name=time().'.'.$ext;
           $image->storeAs('/public/media/user',$image_name);
        }

        if($request->hasfile('cover_image')){
           $coverimage=$request->file('cover_image');
           $ext=$coverimage->extension();
           $image_cover=time().'.'.$ext;
           $coverimage->storeAs('/public/media/user/cover',$image_cover);
        } 

        $res=new Myprofile;
        $res->user_id=$uid;
        if($request->input('user_fullname')!=null){
          $res->user_fullname=$request->input('user_fullname');
        }else{
          $res->user_fullname=''; 
        }

        if($request->input('user_companyname')!=null){
          $res->user_companyname=$request->input('user_companyname');
        }else{
          $res->user_companyname=''; 
        }

        if($request->input('company_position')!=null){
          $res->company_position=$request->input('company_position');
        }else{
          $res->company_position=''; 
        }

        if($request->input('user_busiemail')!=null){
          $res->user_busiemail=$request->input('user_busiemail');
        }else{
          $res->user_busiemail=''; 
        }
        if($request->input('user_busiphone')!=null){
          $res->user_busiphone=$request->input('user_busiphone');
        }else{
          $res->user_busiphone=''; 
        }
        if($request->input('user_website')!=null){
          $res->user_website=$request->input('user_website');
        }else{
          $res->user_website=''; 
        }
        
        $res->profile_image=$image_name;
        $res->cover_image=$image_cover;      

        if($request->input('business_tags')!=null){
          $res->business_tags=$request->input('business_tags');
        }else{
          $res->business_tags=''; 
        }
        if($request->input('conpany_details')!=null){
          $res->conpany_details=$request->input('conpany_details');
        }else{
          $res->conpany_details=''; 
        }   

        $res->save();
        
        $request->session()->flash('caterr','successfully Save');
        return redirect('user/my-profile');
  
    }


    public function profileupdate(Request $request)
    {
        $uid=$request->session()->get('FRONT_USER_ID');  

        if($request->hasfile('profile_image')){
            if($uid>0){
                $arrImage=DB::table('myprofiles')->where(['user_id'=>$uid])->get();
                if(Storage::exists('/public/media/user/'.$arrImage[0]->profile_image)){
                    Storage::delete('/public/media/user/'.$arrImage[0]->profile_image);
                }
            }           
           $image=$request->file('profile_image');
           $ext=$image->extension();
           $image_name=time().'.'.$ext;
           $image->storeAs('/public/media/user',$image_name);

           DB::table('myprofiles')  
                ->where(['user_id'=>$uid])
                ->update([
                    "profile_image"=>$image_name,
                ]);               
        }

         if($request->hasfile('cover_image')){
            if($uid>0){
                $arrImage=DB::table('myprofiles')->where(['user_id'=>$uid])->get();
                if(Storage::exists('/public/media/user/cover/'.$arrImage[0]->cover_image)){
                    Storage::delete('/public/media/user/cover/'.$arrImage[0]->cover_image);
                }
            }           
           $coverimage=$request->file('cover_image');
           $ext=$coverimage->extension();
           $image_cover=time().'.'.$ext;
           $coverimage->storeAs('/public/media/user/cover',$image_cover);
           DB::table('myprofiles')  
                ->where(['user_id'=>$uid])
                ->update([
                    "cover_image"=>$image_cover,
                ]);            
        }       

       DB::table('myprofiles')  
            ->where(['user_id'=>$uid])
            ->update([

                "user_fullname"=>$request->user_fullname,
                "user_companyname"=>$request->user_companyname,
                "company_position"=>$request->company_position,
                "user_busiemail"=>$request->user_busiemail,
                "user_busiphone"=>$request->user_busiphone,
                "user_website"=>$request->user_website,
                "business_tags"=>$request->business_tags,
                "conpany_details"=>$request->conpany_details,

            ]);
        
        $request->session()->flash('caterr','successfully updated');
        return redirect('user/my-profile');      
        

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
     * @param  \App\Models\Myprofile  $myprofile
     * @return \Illuminate\Http\Response
     */
    public function show(Myprofile $myprofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Myprofile  $myprofile
     * @return \Illuminate\Http\Response
     */
    public function edit(Myprofile $myprofile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Myprofile  $myprofile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Myprofile $myprofile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Myprofile  $myprofile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Myprofile $myprofile)
    {
        //
    }
}
