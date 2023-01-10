@extends('admin/layout')
@section('page_title','All Posts')
@section('posts_select','active')

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
										<li class="list-inline-item">All Posts</li>
									</ul>
									<code style="color: #00ad5f;">
									 {{session('caterr')}}
									</code>									
								</div>
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
						<th>User Name</th>
						<th>Title</th>
						<th>Category</th>
						<th>Img</th>
						<th>Created</th>
						<th>Post Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $colorlist)
						<tr>
							<td>{{$colorlist->id}}</td>
							<td>{{$colorlist->user_id}}</td>
							<td>{{$colorlist->title}}</td>
							<td>{{$colorlist->category}}</td>
							<td>{{$colorlist->post_img}}</td>
							<td>{{$colorlist->created_at}}</td>
							<td>{{$colorlist->post_status}}</td>
							<td>{{$colorlist->title}}</td>
						</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
		<!-- END DATA TABLE-->
	</div>

@endsection