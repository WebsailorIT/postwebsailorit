@extends('admin/layout')

@section('page_title','Edit Administrator')


@section('container')



	<div class="col-md-12">
      <div class="card">
       <div class="card-header" style="background: #333;color: #fff;">Change Password</div>
		<div class="card-body">
		   @php
            $super_id=0;
            @endphp
            @foreach($super_admin as $admin_lists)
            @php
            $super_id=$admin_lists->id;
            @endphp
			@endforeach				
			<form action="{{route('administrators.update',[$super_id])}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group has-success">
				<label for="cc-name">Change Password</label>
					<input id="cc-name" name="password" type="text" class="form-control cc-name valid" placeholder="New Password" value="" required>
										
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