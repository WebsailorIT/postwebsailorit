@extends('admin/layout')
@section('page_title','All Categories')
@section('category_select','active')

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
										<li class="list-inline-item">All Categories</li>
									</ul>
									<code style="color: #00ad5f;">
									 {{session('caterr')}}
									</code>									
								</div>
								<a href="categories/add-category" class="au-btn au-btn-icon au-btn--green">
									<i class="zmdi zmdi-plus"></i>Add Category</a>
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
						<th>ID</th>
						<th>Category Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $catelists)
						<tr>
							<td>{{$catelists->id}}</td>
							<td>{{$catelists->category_name}}</td>
							<td><a href="categories/{{$catelists->id}}" class="btn-sm au-btn-icon au-btn--green" style="color:#fff;">Edit</a> <a href="categories/delete/{{$catelists->id}}" class="btn-sm au-btn-icon btn-danger" style="color:#fff;">Delete</a></td>
							
						</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
		<!-- END DATA TABLE-->
		<div class="col-md-12 navigation">{{$data->links()}}</div>
	</div>

@endsection