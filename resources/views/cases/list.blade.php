@extends('app')
@section('sidebar')
<ul class="nav">
  <a href="{{ url('cases') }}" class="list-group-item"> {{ Lang::get('aop.case_status_all') }} </a>
  <a href="{{ url('cases') }}" class="list-group-item"> {{ Lang::get('aop.case_status_open') }} </a>
  <a href="{{ url('cases') }}" class="list-group-item"> {{ Lang::get('aop.case_status_closed') }}</a>
  <a href="{{ url('cases/create') }}" class="list-group-item"> {{ Lang::get('aop.create_case') }} </a>
</ul>
@endsection

@section('content')
<div class="row">
<div class="col-md-12">

<form action="" method="POST" role="form" class="form-inline">

    <div class="form-group">

        <select name="status" class="form-control">
            <option value="" selected="">Filter by status</option>
            <option value="open">Open</option>
            <option value="inprogress">In Progress</option>
            <option value="closed">Closed</option>
        </select>
        <input type="text" name="keywords" class="form-control">
    </div>
    <button type="submit" class="btn btn-custom "> {{ Lang::get('aop.search') }}</button>
    <div class="pull-right">
    <button type="button" class="btn btn-custom" onclick="location.href='cases/create';">
        {{ Lang::get('aop.create_case') }}
    </button>
    </div>
</form>
</div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
<div class="col-md-12">
<table class="table table-striped">
 <thead>
  <tr>
   <th class="col-md-1">{{ Lang::get('aop.case_number') }}</th>
   <th class="col-md-2">{{ Lang::get('aop.case_type') }}</th>
   <th class="col-md-7">{{ Lang::get('aop.case_subject') }}</th>
   <th class="col-md-2">{{ Lang::get('aop.case_status') }}</th>
  </tr>
 </thead>
  <tbody>
   <tr>
    <td><a href="{{ url('cases/read') }}">#1</a></td>
    <td>Support</td>
    <td><a href="{{ url('cases/read') }}">Case creation</a></td>
     <td><p class="badge progress-bar-success">Open</p></td>
   </tr>
   <tr>
     <td><a href="{{ url('cases/read') }}">#2</a></td>
     <td>Administration</td>
     <td><a href="{{ url('cases/read') }}">I did not receive my invoice</a></td>
     <td><p class="badge progress-bar-success">Open</p></td>
   </tr>
  </tbody>
</table>
</div>
</div>

@endsection
