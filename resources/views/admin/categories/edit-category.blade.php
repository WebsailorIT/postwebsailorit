@extends('admin/layout')

@section('page_title','Edit Category')


@section('container')



	<div class="col-md-12">
	   
      <div class="card">
       <div class="card-header" style="background: #333;color: #fff;">Update Category</div>
		<div class="card-body">
			
			<form action="{{route('category.update',[$data->id])}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group has-success">
				<label for="category_name">Category Name</label>
					<input id="category_name" name="category_name" type="text" class="form-control cc-name valid" placeholder="Category Name" value="{{$data->category_name}}" required>
					<code>
					@error('category_name')
					 {{$message}}
					@enderror	
					 </code>					
				</div>
							
				<div>
					<button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
						<span id="payment-button-amount">Update</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	</div>

@endsection