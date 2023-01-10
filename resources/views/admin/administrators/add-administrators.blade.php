@extends('admin/layout')
@section('page_title','Add Administrator')


@section('container')



	<div class="col-md-12">
	
      <div class="card">
       <div class="card-header" style="background: #333;color: #fff;">Add New Administrator</div>
		<div class="card-body">
			
			<form action="{{route('administrators.insert')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group has-success">
				<label for="cc-username">username</label>
					<input id="cc-username" name="username" type="text" class="form-control cc-name valid" placeholder="Username" required>
					<code>
					@error('username')
					 {{$message}}
					@enderror	
					 </code>					
				</div>
				
				<div class="form-group has-success">
				<label for="cc-email">Email</label>
					<input id="cc-email" name="email" type="email" class="form-control cc-name valid" placeholder="Email" required>
					<code>
					@error('email')
					 {{$message}}
					@enderror	
					 </code>					
				</div>

				<div class="form-group has-success">
				<label for="cc-password">Password</label>
					<input id="cc-password" name="password" type="text" class="form-control cc-name valid" placeholder="password" required>
					<code>
					@error('password')
					 {{$message}}
					@enderror	
					 </code>					
				</div>								
				
				<div>
					<button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
						<span id="payment-button-amount">Add</span>
					</button>
				</div>
			</form>
		</div>
	</div>
	</div>

@endsection