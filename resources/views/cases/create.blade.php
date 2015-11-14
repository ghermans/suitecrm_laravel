@extends('app')
@section('sidebar')
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_all') }}</a>
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_open') }}</a>
  <a href="{{ url('cases') }}" class="list-group-item">{{ Lang::get('aop.case_status_closed') }}</a>
  <a href="{{ url('cases/create') }}" class="list-group-item"> {{ Lang::get('aop.create_case') }}</a>
@endsection

@section('content')

<div class="page-header"><h2>{{ Lang::get('aop.create_case') }}</h2> </div>

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade in" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
@foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
    @endforeach
    </div>
@endif

<form action="{{ url('cases/store') }}" method="post" enctype="multipart/form-data" class="well well-sm">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="form-group">
  <label for="case_type" class="form-label">{{ Lang::get('aop.case_type') }}</label>
  <select name="case_type" id="case_type" class="form-control">
   <option>Select type</option>
   <option value="Administration">Administration</option>
   <option value="Security">Security</option>
   <option value="Technical">Technical</option>
  </select>
 </div>

  <div class="form-group">
  <label for="case_subject" class="form-label">{{ Lang::get('aop.case_subject') }}</label>
  <input name="case_subject" id="case_subject" class="form-control">
 </div>

 <div class="form-group">
  <label for="case_message" class="form-label">{{ Lang::get('aop.case_description') }}</label>
  <textarea name="case_message" id="case_message" class="form-control" rows="5"></textarea>
 </div>

   <div class="form-group">
    <label for="case_file">{{ Lang::get('aop.case_add_file') }}</label>
    <input type="file" id="case_file" class="form-control">
  </div>

  <div class="form-group">
   <button type="submit" name="case_submit" class="btn btn-custom">{{ Lang::get('aop.save') }}</button>
 </div>
</form>

@endsection
