@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <form method="post" action="{{ route('users.store') }}">
		<div class="row justify-content-center">
		    <div class="col-md-6">
		        <div class="card card-primary">
		            <div class="card-header">
		                <h3 class="card-title">User</h3>
		            </div>
		            <!-- /.card-header -->
		            <!-- form start -->
		            <div class="card-body">
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div><br />
						@endif
						<form method="post" action="{{ route('users.store') }}">
						<div class="form-group">
								@csrf
								<label for="name"><i class="text-danger">*</i>Name:</label>
								<input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email">
							</div>
							<div class="form-group">
								
								<label for="email"><i class="text-danger">*</i>Email address:</label>
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
							</div>
							<div class="form-group">
								<label for=" Password"><i class="text-danger">*</i> Password:</label>
								<input type="password" class="form-control" name="password" placeholder="Password">

							</div>
							
							<button type="submit" class="btn btn-primary float-left">Save</button>
							<a type="button" href="{{ route('users.list') }}" class="btn btn-danger float-right">Cancel</a>
		            </div>
		            <!-- /.card-body -->
		        </div>
		        <!-- /.card -->
		    </div>
		</div>
	</form>
</div>	

@endsection