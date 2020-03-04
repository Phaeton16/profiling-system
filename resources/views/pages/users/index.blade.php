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

<div class="container-fluid">
  <div class="card">
      <div class="card-header">
          <a href="{{route('users.create')}}" class="btn btn-primary">
			<i class="fas fa-user-plus"></i>&nbsp;Add Users
		</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          <table class="table table-bordered table-hover" id="users-table">
              <thead>
                  <tr class="text-center">
                      <th> Name</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($data ?? '' as $value)
                <tr>
                  <td>{{$value->name}}</td>
                  <td>{{$value->email}}</td>
                  <td>{{$value->password}}</td>
                  <td class='text-right'>

                    <div class="an-settings-button pull-right" style="border: transparent;">

                    <a href="{{ route('users.edit',$value->id)}}" class="btn btn-primary">
                      <i class="fas fa-edit"></i>
                      &nbsp;Edit
                    </a>

                    <form method="POST" action="{{route('users.delete', $value->id) }}">
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