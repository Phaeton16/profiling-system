@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <form method="post" action="{{ route('students.store') }}">
		<div class="row justify-content-center">
		    <div class="col-md-6">
		        <div class="card card-primary">
		            <div class="card-header">
		                <h3 class="card-title">Students</h3>
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
						<form method="post" action="{{ route('students.store') }}">
							<div class="form-group">
								@csrf
								<label for="first name"><i class="text-danger">*</i>First Name:</label>
								<input type="text" class="form-control" name="first name" required/>
							</div>
							<div class="form-group">
								<label for="middle name"><i class="text-danger">*</i>Middle Name:</label>
								<input type="text" class="form-control" name="middle name" required/>
							</div>
							<div class="form-group">
								<label for="last name"><i class="text-danger">*</i>Last Name:</label>
								<input type="text"class="form-control"name="last name" required/>
							</div>
							<div class="form-group">
								<label for="middle name"><i class="text-danger">*</i>Gender:</label>
								<select class="form-control" name="gender_id" value="{{old('gender_id')}}">
	                            @foreach($gender as $g)
	                            <option value="{{$g->id}}">{{$g->name}}</option>
	                            @endforeach
	                        </select>
							</div>
							<div class="form-group">
								<label for="middle name"><i class="text-danger">*</i>Course:</label>
								<select class="form-control" name="courses_id" value="{{old('courses_id')}}">
	                            @foreach($courses as $g)
	                            <option value="{{$g->id}}">{{$g->name}}</option>
	                            @endforeach
	                        </select>
							</div>
									
							<button type="submit" class="btn btn-primary float-left">Save</button>
							<a type="button" href="{{ route('students.list') }}" class="btn btn-danger float-right">Cancel</a>
		            </div>
		            <!-- /.card-body -->
		        </div>
		        <!-- /.card -->
		    </div>
		</div>
	</form>
</div>	

@endsection