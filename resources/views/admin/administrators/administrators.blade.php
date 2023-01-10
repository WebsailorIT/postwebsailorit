@extends('admin/layout')
@section('page_title','Administrators')
@section('addministrators_select','active')

@section('container')



	<div class="col-md-12">
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
										<li class="list-inline-item">Administrators</li>
									</ul>
									<code style="color: #00ad5f;">
									  {{session('msg')}}
									</code>									
								</div>
								<a href="administrators/add-administrators" class="au-btn au-btn-icon au-btn--green">
									<i class="zmdi zmdi-plus"></i>Add Administrators</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
	
					 
                
                
	
		<!-- DATA TABLE-->
		<div class="table-responsive m-b-40">
			<table class="table table-borderless table-data3">
				<thead>
					<tr>
						<th>Username</th>
						<th>Email</th>
						<th>Created</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($super_admin as $admin_lists)
						<tr>
							<td>{{$admin_lists->username}}</td>
							<td>{{$admin_lists->email}}</td>
							<td>{{$admin_lists->created_at}}</td>
							<td><a href="administrators/{{$admin_lists->id}}" class="btn-sm au-btn-icon au-btn--green" style="color:#fff;">Edit</a></td>
							
						</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
		<!-- END DATA TABLE-->
	</div>

@endsection