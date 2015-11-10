@extends('app_nosidebar')

@section('content')
<div class="page-header">
<h2>Admin dashboard</h2>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">General</div>
      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item"><a href="">Portal settings</a></li>
        <li class="list-group-item"><a href="">Announcements</a></li>
        <li class="list-group-item"><a href="{{ url('admin/mail')}}">Mail settings</a></li>
        <li class="list-group-item"><a href="{{ url('admin/connector')}}">SuiteCRM connector</a></li>
      </ul>
    </div>
  </div>

  <div class="col-md-6">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">User management</div>
      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item"><a href="{{ url('admin/users') }}">User list</a></li>
        <li class="list-group-item"><a href="{{ url('admin/users/create') }}">Create user</a></li>
        <li class="list-group-item">Roles list</li>
        <li class="list-group-item">Permissions</li>
      </ul>
    </div>
  </div>

</div>

@endsection
