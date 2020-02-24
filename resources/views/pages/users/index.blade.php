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
          <a href="{{route('testimony.create')}}" class="btn btn-primary">
			<i class="fas fa-user-plus"></i>&nbsp;Add Testimonial
		</a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          <table class="table table-bordered table-hover" id="testimonial-table">
              <thead>
                  <tr class="text-center">
                      <th>Date</th>
                      <th>Tittle</th>
                      <th>Stats</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @foreach($data ?? '' as $value)
                <tr>
                  <td>{{$value->created_at->format('M-d-Y')}}</td>
                  <td>{{$value->title}}</td>
                  <td>
                    <input type="hidden" name="testimonyStatus" value="{{$value->post_status}}">
                    <span class="badge badge-primary postedSpan">Posted</span>
                    <span class="badge badge-primary unpostedSpan">Unpost</span>
                  </td>
                  <td class='text-right'>

                    <div class="an-settings-button pull-right" style="border: transparent;">

                    <button class="btn btn-success postButton" onclick="postTestimony({{$value->id}})">
                      <i class="fas fa-check-square"></i> 
                      &nbsp; Post
                    </button>

                    <button class="btn btn-success unpostButton" onclick="unpostTestimony({{$value->id}})">
                      <i class="fas fa-check-square"></i> 
                      &nbsp; Unpost
                    </button>

                    <a href="{{ route('testimony.edit', $value->id)}}" class="btn btn-primary">
                      <i class="fas fa-edit"></i>
                      &nbsp;Edit
                    </a>

                    <button class="btn btn-danger delete-news" onclick="deleteTestimony ({{ $value->id }})">
                      <i class="fas fa-trash"></i>
                      &nbsp;Delete
                    </button>
                  
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