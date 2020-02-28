@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <form method="post" action="{{ route('students.update', $data->id) }}">
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
							<div class="form-group">
								@csrf
								<label for="first name"><i class="text-danger">*</i>First Name:</label>
								<input type="text" class="form-control" value="{{$data->fname}}" name="fname" required/>
							</div>
							<div class="form-group">
								<label for="middle name"><i class="text-danger">*</i>Middle Name:</label>
								<input type="text" class="form-control" value="{{$data->mname}}"name="mname" required/>
							</div>
							<div class="form-group">
								<label for="last name"><i class="text-danger">*</i>Last Name:</label>
								<input type="text"class="form-control"value="{{$data->lname}}"name="lname" required/>
							</div>
							<div class="form-group">
								<label for="gender"><i class="text-danger">*</i>Gender:</label>
								<select class="form-control" name="gender_id" value="{{old('gender_id')}}">
	                            @foreach($gender as $g)
	                            <option value="{{$g->id}}"{{$g->id == $data->gender_id ? 'selected' : ''}}>{{$g->name}}</option>
	                            @endforeach
	                        </select>
							</div>
							<div class="form-group">
								<label for ="birtdate"><i class="text-danger">*</i>Birthdate:</label>
								<div class="input-group">	
									<div class="input-group-prepend">
									<span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
									</div>
									<input type="date" class="form-control"value="{{$data->birth_date}}" name="birth_date">
								</div>
							</div>
							<div class="form-group">
								<label for="Student id Number"><i class="text-danger">*</i>Student ID Number:</label>
								<input type="text" class="form-control"value="{{$data->student_id_number}}" name="student_id_number" required/>
							</div>
							<div class="form-group">
								<label for="level"><i class="text-danger">*</i>Level:</label>
								<select class="form-control" name="level_id" value="{{old('level_id')}}">
	                            @foreach($level as $g)
	                            <option value="{{$g->id}}" {{$g->id == $data->level_id ? 'selected' : ''}}> {{$g->name}}</option>
	                            @endforeach
	                        </select>
							<div class="form-group">
								<label for="course"><i class="text-danger">*</i>Course:</label>
								<select class="form-control" name="course_id" value="{{old('course_id')}}">
	                            @foreach($courses as $g)
	                            <option value="{{$g->id}}"{{$g->id == $data->course_id ? 'selected' : ''}}>{{$g->name}}</option>
	                            @endforeach
	                        </select>
							</div>						
							<div class="div" style="margin-top:20px">
								<button type="submit" class="btn btn-primary float-left">Save</button>
								<a type="button" href="{{ route('students.list') }}" class="btn btn-danger float-right">Cancel</a>
							</div>
		            </div>
		            <!-- /.card-body -->
		        </div>
		        <!-- /.card -->
		    </div>
		</div>
	</form>
</div>	

@endsection