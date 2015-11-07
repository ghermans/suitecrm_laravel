@extends('app_nosidebar')


@section('content')
<div class="page-header">
  <h2>Quotes</h2>
</div>
  <div class="well">
    <form action="" class="form-horizontal">

   <div class="row">
    <div class="col-md-3">
     <input type="text" id="quote_number" name="quote_number"  class="form-control input-sm">
     <span class="help-block">Number</span>
    </div>

  <div class="col-md-3">
    <select name="quote_status" class="form-control">
      <option selected=""></option>
      <option value="Draft">Draft</option>
      <option value="Negotiation">Negotiation</option>
      <option value="Delivered">Delivered</option>
      <option value="On_hold">On hold</option>
      <option value="Confirmed">Confirmed</option>
      <option value="closed_accpted">Closed Accepted</option>
      <option value="closed_lost">Closed Lost</option>
      <option value="closed_dead">Closed Dead</option>
    </select>
     <span class="help-block">Status</span>
  </div>

  <div class="col-md-3">
    <input type="text" class="form-control" id="validuntill">
    <span class="help-block"> Valid untill</span>
  </div>
  <script type="text/javascript">
    $(function () {
        $('#validuntill').datetimepicker({ format: 'DD-M-YYYY',  locale: '', showClose: true});
    });
</script>
    <div class="col-md-2">
      <button type="submit" class="btn btn-custom">{{ Lang::get('aop.search')}}</button>
    </div>

</form>
</div>
</div>

<table class="table table-bordered table-striped">
  <thead>
    <th class="col-md-1">Number</th>
    <th class="col-md-5">Title</th>
    <th class="col-md-2">Stage</th>
    <th class="col-md-2">Grand total</th>
    <th>Valid untill</th>
   </thead>
   <tbody>
    <tr>
     <td><a href="#1">#1</a></td>
     <td><a href="#">Suite portal</a></td>
     <td class="text-success"><strong>Closed Accepted</strong></td>
     <td>&euro; 0.00</td>
     <td>27/11/2015</td>
    </tr>
    <tr>
     <td><a href="#1">#1</a></td>
     <td><a href="#">Suite portal</a></td>
     <td class="text-success"><strong>Confirmed</strong></td>
     <td>&euro; 0.00</td>
     <td>27/11/2015</td>
    </tr>
    <tr>
     <td><a href="#1">#1</a></td>
     <td><a href="#">Suite portal</a></td>
     <td class="text-danger"><strong>Closed Dead</strong></td>
     <td>&euro; 0.00</td>
     <td>27/11/2015</td>
    </tr>
    <tr>
     <td><a href="#1">#1</a></td>
     <td><a href="#">Suite portal</a></td>
     <td class="text-danger"><strong>Closed Lost</strong></td>
     <td>&euro; 0.00</td>
     <td>27/11/2015</td>
    </tr>
   </tbody>
</table >


@endsection
