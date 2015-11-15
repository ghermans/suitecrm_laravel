@extends('app_nosidebar')

@section('content')
<div class="page-header">
<h2>Portal settings</h2>
</div>

<div class="well">
<form action="" method="POST" class="form-horizontal">

  <div class="form-group">
    <label for="current_pass" class="col-sm-4 control-label">Site name <span class="text-danger">*</span></label>
    <div class="col-sm-5">
     <input type="text" name="site_name" class="form-control">
    </div>
  </div>

 <div class="form-group">
   <label for="current_pass" class="col-sm-4 control-label">Allow users to reopen cases <span class="text-danger">*</span></label>
   <div class="col-sm-5">
    <select name="reopen_cases" class="form-control">
      <option value="no">No</option>
      <option value="yes">Yes</option>
    </select>
   </div>
 </div>

 <div class="form-group">
   <label for="password" class="col-sm-4 control-label">Allow users to close cases <span class="text-danger">*</span></label>
   <div class="col-sm-5">
     <select name="allow_case_closing" class="form-control">
       <option value="no">No</option>
       <option value="yes">Yes</option>
     </select>
   </div>
 </div>

   <div class="form-group">
   <label for="confirm_pass" class="col-sm-4 control-label">Allow users to set case priority <span class="text-danger">*</span></label>
   <div class="col-sm-5">
     <select name="allow_case_closing" class="form-control">
       <option value="no">No</option>
       <option value="yes">Yes</option>
     </select>
   </div>
 </div>

 <div class="form-group">
 <label for="confirm_pass" class="col-sm-4 control-label">Allow users to choose the case type<span class="text-danger">*</span></label>
 <div class="col-sm-5">
   <select name="allow_case_closing" class="form-control">
     <option value="no">No</option>
     <option value="yes">Yes</option>
   </select>
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
