@extends('admin/layout')
@section('page_title','Add Color')


@section('container')



	<div class="col-md-12">
	    <h2 style="margin-bottom:20px;text-align:center">Add Color</h2>
		<section class="au-breadcrumb">
			<div class="section__content section__content--p30">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="au-breadcrumb-content">
								<div class="au-breadcrumb-left">
									
									<ul class="list-unstyled list-inline au-breadcrumb__list">
										<li class="list-inline-item active">
											<a href="{{url('admin/dashboard')}}">Dashboard</a>
										</li>
										<li class="list-inline-item seprate">
											<span>/</span>
										</li>
										<li class="list-inline-item active">
											<a href="{{url('admin/color')}}">Color Master</a>
										</li>
										<li class="list-inline-item seprate">
											<span>/</span>
										</li>										
										<li class="list-inline-item">Add Color</li>
										
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
	
	
	
      <div class="card">
       <div class="card-header" style="background: #333;color: #fff;">Add New Color</div>
		<div class="card-body">
			
			<form action="{{route('color.insert')}}" method="post" >
				@csrf
				<div class="form-group has-success">
					<input id="cc-name" name="color" type="text" class="form-control cc-name valid" placeholder="Color" required>
					<code>
					@error('color')
					 {{$message}}
					@enderror	
					 </code>					
				</div>
				
									
				<div>
					<button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
						<span id="payment-button-amount">Save</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	</div>

@endsection