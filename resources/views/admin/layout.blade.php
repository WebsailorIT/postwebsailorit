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
    <title>@yield('page_title')</title>

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
    <style>
        .navigation .flex-1{display: none;}
        .navigation svg{
            width: 25px;
            vertical-align: middle;
        }

        .navigation {
            text-align: right;
        }

        .navigation span{

        }

    </style>
    <style>#hd{display: none;}</style>

</head>

<body>
 
    <div class="page-wrapper">
        

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
			
                <a target="_blank" href="{{url('/')}}">
                    <img class="img-fluid" src="{{asset('admins/images/logo-transperent.png')}}" alt="Copper">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="@yield('d_select')">
                            <a href="{{url('admin/dashboard')}}">
                             <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						
                        <li class="@yield('posts_select')">
                            <a href="{{url('admin/posts')}}">
                                <i class="fas fa-pencil-square-o"></i>All Posts</a>
                        </li>

                         <li class="@yield('category_select')">
                            <a href="{{url('admin/categories')}}">
                                <i class="fas fa fa-list"></i>All Categories</a>
                        </li>
                                               
                         <li class="@yield('addministrators_select')">
                            <a href="{{url('admin/administrators')}}">
                              <i class="fas fa-user-circle"></i>Administrators</a>
                         </li>                        
                                              

                       
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="form-header" action="" method="POST">
                               Hi, <b style="text-transform:capitalize;margin:0 10px;">{{session('ADMIN_NAME')}}</b> Welcome to Your Account
                            </div>
                            <div class="header-button">
                              
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{session('ADMIN_NAME')}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                           
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="{{url('admin/logout')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

			
			
			
			
			
			
			
			
			
			
			
			
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            @section('container')
							
							@show
						</div>
                    </div>
                </div>
            </div>
        
		
		
		
		
		
		
		
		
		
		
		</div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS--> 
	
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
    <script src="{{asset('admins/tinymce/tinymce.min.js')}}"></script>
	<script type="text/javascript">
		
			
	tinymce.init({
		selector: '#textareea-input',
		plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
		imagetools_cors_hosts: ['picsum.photos'],
		menubar: 'file edit view insert format tools table help',
		toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
		toolbar_sticky: true,
		autosave_ask_before_unload: true,
		autosave_interval: "30s",
		autosave_prefix: "{path}{query}-{id}-",
		autosave_restore_when_empty: false,
		autosave_retention: "2m",
		image_advtab: true,
		/*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
		link_list: [
			{ title: 'My page 1', value: 'https://www.codexworld.com' },
			{ title: 'My page 2', value: 'https://www.xwebtools.com' }
		],
		image_list: [
			{ title: 'My page 1', value: 'https://www.codexworld.com' },
			{ title: 'My page 2', value: 'https://www.xwebtools.com' }
		],
		image_class_list: [
			{ title: 'None', value: '' },
			{ title: 'Some class', value: 'class-name' }
		],
		importcss_append: true,
		file_picker_callback: function (callback, value, meta) {
			/* Provide file and text for the link dialog */
			if (meta.filetype === 'file') {
				callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
			}
		
			/* Provide image and alt text for the image dialog */
			if (meta.filetype === 'image') {
				callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
			}
		
			/* Provide alternative source and posted for the media dialog */
			if (meta.filetype === 'media') {
				callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
			}
		},
		templates: [
			{ title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
			{ title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
			{ title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
		],
		template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
		template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
		height: 600,
		image_caption: true,
		quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
		noneditable_noneditable_class: "mceNonEditable",
		toolbar_mode: 'sliding',
		contextmenu: "link image imagetools table",
	});		
	
	</script>
	

</body>

</html>
<!-- end document-->