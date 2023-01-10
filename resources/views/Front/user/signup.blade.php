<?php


use Illuminate\Support\Facades\Config;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Sign Up</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admins/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admins/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('admins/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admins/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admins/images/favicon.png')}}">
    <!-- Main CSS-->
    <link href="{{asset('admins/css/theme.css')}}" rel="stylesheet" media="all">

</head>
 
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
						
                            <a href="{{url('/')}}">
                                <img class="img-fluid" src="{{asset('admins/images/logo.png')}}" alt="Copper">
                            </a>
                        </div>
                        <div class="login-form">
						
						
						
                            <form action="{{route('front.registration')}}" method="post">
							 @csrf
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Username">
                                    <code>@error('name')
                                     {{$message}}
                                    @enderror   
                                     </code>
                                </div>                             
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email Address">
									<code>@error('email')
									 {{$message}}
									@enderror	
                                     </code>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
									<code>@error('password')
									 {{$message}}
									@enderror	
                                     </code>
                                     <code>
									 {{session('msg')}}
									 </code>									 
                                </div>
								
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">sign Up</button>
                             
                            </form>
                            <div class="singup-forgot-pass-link" style="padding-bottom: 25px;">
                                 <a class="sign-up" href="/user/signin">Already have a account? Sing In</a>
                            </div>							
							    <code>
									{{session('msgs')}}
								</code>
							
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('admins/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('admins/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admins/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('admins/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('admins/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admins/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('admins/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('admins/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admins/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('admins/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admins/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('admins/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('admins/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('admins/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->