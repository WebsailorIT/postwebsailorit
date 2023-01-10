@extends('font/layout')
@section('page_title','404 Error Page Not Found')


@section('container')



  <style>.header-nav, .banner, .page-header, .section-padding {
    opacity: 1 !important;
}

header,footer{
  display: none;
}

.page-header {
    height: 200px !important;
}

body{
     width: 50%;
    margin: 128px auto;
    border: 1px solid #f1f1f1;   
        border-radius: 5px;
    box-shadow: 0px 0px 5px 0px #f1f1f1;
}
</style> 
<!-- catg header banner section -->
     <!-- start of page-header -->
    <section class="page-header bg-light-gray has-shapes has-bg-brash bg-brash-bottom" style="background:#fff;">
        <div class="container h-100">
            <div class="row d-flex align-items-center h-100">
                <div class="col-md-12 text-center">
                    <h2 class="h1 font-weight-bold"><a class="navbar-brand p-0" href="{{url('/')}}" style="margin: 0;"><img class="img-fluid" src="{{asset('font-assets/images/BRITISH-POST-LOGO.jpg')}}" alt="Copper"></a></h2>
                    <nav class="mt-15" aria-label="breadcrumb">
                        <ol class="breadcrumb font-weight-bold bg-transparent p-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="{{url('/')}}" class="text-black-300">Home</a></li>
                            <li class="breadcrumb-item text-primary" aria-current="page">404 Error</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section> 

  <!-- product category -->
<section id="aa-product-category">
   <div class="container">
      <div class="row" style="text-align:center;">
        <br/><br/><br/>
            <h2 style="text-align: center;width: 100%;margin-bottom: 70px;">Sorry! Page Not Found</h2>
        <br/><br/><br/>
      </div>
   </div>
</section>  
@endsection