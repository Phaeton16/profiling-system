@extends('layouts.app')

@section('content')

@if(session()->has('save'))
  <div class="row" id="save">
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Notification:</strong>{{ session()->get('save') }}
    </div>
  </div>
@endif

@if(session()->has('edit'))
  <div class="row" id="edit">
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Notification:</strong>{{ session()->get('edit') }}
    </div>
  </div>
@endif
@if(session()->has('delete'))
  <div class="row" id="delete">
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Notification:</strong>{{ session()->get('delete') }}
    </div>
  </div>
@endif

<div class="container-fluid">
  <div class="card">
      <div class="card-header">
          <a href="{{route('students.create')}}" class="btn btn-primary">
			<i class="fas fa-user-plus"></i>&nbsp;Add Students
		</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          <table class="table table-bordered table-hover" id="students-table">
              <thead>
                  <tr class="text-center">
                      <th>Name</th>
                      <th>Level</th>
                      <th>Course</th>
                      <th>Address</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($data ?? '' as $value)
                <tr>
                <input type="hidden" value = "{{$value->id}}">    
                  <td>{{$value->lname}},{{$value->fname}},{{$value->mname}}</td>
                  <td>{{$value->getLevels->name}}</td>
                  <td>{{$value->getCourses->name}}</td>
                  <td>{{$value->getAddress->purok}},{{$value->getAddress->barangay}},{{$value->getAddress->town}},{{$value->getAddress->city}},{{$value->getAddress->province}},{{$value->getAddress->country}}</td>
                  <td class='text-right'>

                    <div class="an-settings-button pull-right" style="border: transparent;">

                      <a href="{{route('students.edit', $value->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                        &nbsp;Edit
                      </a>
                      <form method="POST" action="{{route('students.delete', $value->id) }}">
                          {{ csrf_field() }}

                          <div class="form-group">
                              <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                          </div>
                      </form>
                  
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
      </div>
      <!-- /.card-body -->
  </div>
</div>
@endsection