@extends('front/layout-user')
@section('page_title','My Profile')

@section('container')

<style>
@media all and (max-width:588px){
	.web_sailor_reminfo{
		display:block !important;
		float:none !important;
		margin-top: 10px;
	}
	

 }
</style>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">My Profile</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 flex-grow-1">#{{session('FRONT_USER_NAME')}} <code style="color: #00ad5f;">{{session('caterr')}}</code>	<span class="web_sailor_reminfo" style=" color: #0ab39c; font-size: 13px; float: right; ">Remember, All information will be public</span></h4>
                </div><!-- end card header -->
					
                <div class="card-body">
                    @php
                    $user_id='';
                    $main_id='';
                    $user_fullname='';
                    $user_companyname='';
                    $company_position='';
                    $user_busiemail='';
                    $user_busiphone='';
                    $user_website='';
                    $profile_image='';
                    $cover_image='';
                    $business_tags='';
                    $conpany_details='';
                    @endphp
                   @foreach($my_profile as $user_lists)
                    @php 
                    $main_id=$user_lists->id;
                    $user_id=$user_lists->user_id;
                    $user_fullname=$user_lists->user_fullname;
                    $user_companyname=$user_lists->user_companyname;
                    $company_position=$user_lists->company_position;
                    $user_busiemail=$user_lists->user_busiemail;
                    $user_busiphone=$user_lists->user_busiphone;
                    $user_website=$user_lists->user_website;
                    $profile_image=$user_lists->profile_image;
                    $cover_image=$user_lists->cover_image;
                    $business_tags=$user_lists->business_tags;
                    $conpany_details=$user_lists->conpany_details;
                    @endphp                    
                   @endforeach	
                    
                    @if($user_id!=null)
                    <div class="live-preview user_profile_update">
                        <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                        	@csrf
                        	<div class="row gy-4">	
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="fullname" class="form-label">Full Name</label>
	                                    <input type="text" name="user_fullname" class="form-control" id="fullname" placeholder="Your Full Name" required value="{{$user_fullname}}">
	                                </div>
	                            </div>
	                            <!--end col-->
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="companyname" class="form-label">Business Name</label>
	                                    <input type="text" name="user_companyname" class="form-control" id="companyname" placeholder="Company Name" required value="{{$user_companyname}}">
	                                </div>
	                            </div>
	                            <!--end col-->
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="companypos" class="form-label">Business Position</label>
	                                    <input type="text" name="company_position" class="form-control" id="companypos" placeholder="Company Position" required value="{{$company_position}}">
	                                </div>
	                            </div>
	                            <!--end col-->
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="businessemail" class="form-label">Business Email</label>
	                                    <input type="email" name="user_busiemail" class="form-control" id="businessemail" placeholder="Business Email" required value="{{$user_busiemail}}">
	                                </div>
	                            </div>

	                             <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="businessphone" class="form-label">Business Phone</label>
	                                    <input type="text" name="user_busiphone" class="form-control" id="businessphone" placeholder="Business Phone" required value="{{$user_busiphone}}">
	                                </div>
	                            </div>
	                             <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="businessphone" class="form-label">Website </label>
	                                    <input type="text" name="user_website" class="form-control" id="businessphone" placeholder="Website Url" required value="{{$user_website}}">
	                                    <span style="color: #767676; margin-top: 5px; display: block; ">(Example: https://example.com)</span>
	                                </div>
	                            </div> 	                              
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="profileimage" class="form-label">Profile Image</label>
	                                    <input type="file" name="profile_image" class="form-control" id="profileimage">
	                                    <img src="{{asset('storage/media/user/'.$profile_image)}}" alt="{{$user_companyname}}" width="100px" style=" border: 1px solid #ccc; padding: 5px; margin-top: 5px; " />
	                                	<code>
											@error('profile_image')
											 {{$message}}
											@enderror	
										 </code>	                                    
	                                </div>
	                            </div>                                                      
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="coverimage" class="form-label">Cover Image</label>
	                                    <input type="file" name="cover_image" class="form-control" id="coverimage">
	                                    <img src="{{asset('storage/media/user/cover/'.$cover_image)}}" alt="{{$user_companyname}}" width="100px" style=" border: 1px solid #ccc; padding: 5px; margin-top: 5px; " />
	                                </div>
	                                	<code>
											@error('cover_image')
											 {{$message}}
											@enderror	
										 </code>
	                            </div> 
	                            <div class="col-lg-12">
	                                <div>
	                                    <label for="businesstags" class="form-label">Business Tags</label>
	                                    <textarea class="form-control" name="business_tags" id="businesstags" rows="1" placeholder="Business Tags" required>{{$business_tags}}</textarea>
	                                    <span style="color: #767676; margin-top: 5px; display: block; ">Please separate by comma(Example: motor,car,realestate,etc.). Max. Word: 500</span>
	                                </div>
	                            </div>                            
	                            <div class="col-lg-12">
	                                <div>
	                                    <label for="companydetails" class="form-label">Business Details</label>
	                                    <textarea class="form-control" name="conpany_details" id="companydetails" rows="3" placeholder="Business Detials" required>{{$conpany_details}}</textarea>
	                                    <span style="color: #767676; margin-top: 5px; display: block;">Max. Word: 5000</span>
	                                </div>
	                            </div>
	                            <div class="col-lg-12">
	                                <div class="text-center">
	                                   <input type="submit" name="submit" class="btn btn-primary" value="Update" id="submit">
	                                </div>
	                            </div> 
                            </div>                           
                       </form>
                    </div> 

                    @else
                    <div class="live-preview user_profile_create">
                        <form action="{{route('profile.insert')}}" method="post" enctype="multipart/form-data">
                        	@csrf
                        	<div class="row gy-4">	
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="fullname" class="form-label">Full Name</label>
	                                    <input type="text" name="user_fullname" class="form-control" id="fullname" placeholder="Your Full Name" required>
	                                </div>
	                            </div>
	                            <!--end col-->
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="companyname" class="form-label">Business Name</label>
	                                    <input type="text" name="user_companyname" class="form-control" id="companyname" placeholder="Company Name" required>
	                                </div>
	                            </div>
	                            <!--end col-->
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="companypos" class="form-label">Business Position</label>
	                                    <input type="text" name="company_position" class="form-control" id="companypos" placeholder="Company Position">
	                                </div>
	                            </div>
	                            <!--end col-->
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="businessemail" class="form-label">Business Email</label>
	                                    <input type="email" name="user_busiemail" class="form-control" id="businessemail" placeholder="Business Email" required>
	                                </div>
	                            </div>

	                             <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="businessphone" class="form-label">Business Phone</label>
	                                    <input type="text" name="user_busiphone" class="form-control" id="businessphone" placeholder="Business Phone">
	                                </div>
	                            </div>
	                             <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="businessphone" class="form-label">Website </label>
	                                    <input type="text" name="user_website" class="form-control" id="businessphone" placeholder="Business Phone">
	                                    <span style="color: #767676; margin-top: 5px; display: block; ">(Example: https://example.com)</span>
	                                </div>
	                            </div> 	                              
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="profileimage" class="form-label">Profile Image</label>
	                                    <input type="file" name="profile_image" class="form-control" id="profileimage" required>
	                                	<code>
											@error('profile_image')
											 {{$message}}
											@enderror	
										 </code>	                                    
	                                </div>
	                            </div>                                                      
	                            <div class="col-xxl-3 col-md-6">
	                                <div>
	                                    <label for="coverimage" class="form-label">Cover Image</label>
	                                    <input type="file" name="cover_image" class="form-control" id="coverimage" required>
	                                </div>
	                                	<code>
											@error('cover_image')
											 {{$message}}
											@enderror	
										 </code>
	                            </div> 
	                            <div class="col-lg-12">
	                                <div>
	                                    <label for="businesstags" class="form-label">Business Tags</label>
	                                    <textarea class="form-control" name="business_tags" id="businesstags" rows="1" placeholder="Business Tags"></textarea>
	                                    <span style="color: #767676; margin-top: 5px; display: block; ">Please separate by comma(Example: motor,car,realestate,etc.). Max. Word: 500</span>
	                                </div>
	                            </div>                            
	                            <div class="col-lg-12">
	                                <div>
	                                    <label for="companydetails" class="form-label">Business Details</label>
	                                    <textarea class="form-control" name="conpany_details" id="companydetails" rows="3" placeholder="Business Detials"></textarea>
	                                    <span style="color: #767676; margin-top: 5px; display: block;">Max. Word: 5000</span>
	                                </div>
	                            </div>
	                            <div class="col-lg-12">
	                                <div class="text-center">
	                                   <input type="submit" name="submit" class="btn btn-primary" value="Save" id="submit">
	                                </div>
	                            </div> 
                            </div>                           
                       </form>
                    </div> 
                    @endif
                
                     

                </div>
           </div>
        </div>
    </div>


		

@endsection