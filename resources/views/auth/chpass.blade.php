@extends('app')
@section('sidebar')
 <a href="{{ url('profile') }}" class="list-group-item"> {{ Lang::get('aop.my_account') }} </a>
 <a href="{{ url('profile/chpass')}}" class="list-group-item"> {{ Lang::get('aop.change_password') }} </a>
@endsection

@section('content')
<div class="page-header"><h2>{{ Lang::get('aop.chpass_title') }}</h2> </div>

 <div class="well">
<form action="" method="POST" class="form-horizontal">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="current_pass" class="col-sm-3 control-label">{{ Lang::get('aop.current_password') }}</label>
    <div class="col-sm-6">
      <input type="password" name="current_pass" id="current_pass" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="new_pass" class="col-sm-3 control-label">{{ Lang::get('aop.new_password') }}</label>
    <div class="col-sm-6">
      <input type="password" name="new_pass" id="new_pass" class="form-control">
    </div>
  </div>

    <div class="form-group">
    <label for="confirm_pass" class="col-sm-3 control-label">{{ Lang::get('aop.confirm_password') }}</label>
    <div class="col-sm-6">
      <input type="password" name="confirm_pass" id="confirm_pass" class="form-control">
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-custom">{{ Lang::get('aop.update') }}</button>
    </div>
  </div>
</form>
 </div>
@endsection
