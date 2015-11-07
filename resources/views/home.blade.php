@extends('app')
@section('sidebar')
  <a href="{{ url('') }}" class="@if (Request::is('/*')) list-group-item active @endif list-group-item"> {{ Lang::get('aop.home') }}</a>
  <a href="{{ url('cases') }}" class="@if (Request::is('cases')) list-group-item active @endif list-group-item">{{ Lang::get('aop.cases') }}</a>
  <a href="{{ url('meetings') }}" class="@if (Request::is('meetings')) list-group-item active @endif list-group-item">{{ Lang::get('aop.meetings') }}</a>
  <a href="{{ url('quotes') }}" class="@if (Request::is('quotes')) list-group-item active @endif list-group-item">{{ Lang::get('aop.quotes') }}</a>
@endsection

@section('content')
<div class="panel panel-default">
            <div class="panel-heading tocustomer">
                <h3 class="panel-title">Open cases</h3>
            </div>
          <div class="table-responsive">
            <table class="table table-striped">
             <thead>
              <tr>
               <th class="col-md-1">{{ Lang::get('aop.case_number') }}</th>
               <th class="">{{ Lang::get('aop.case_type') }}</th>
               <th class="col-md-6">{{ Lang::get('aop.case_subject') }}</th>
               <th class="">{{ Lang::get('aop.case_last_update') }}</th>
              </tr>
             </thead>
              <tbody>
               <tr>
                <td><a href="{{ url('cases/read') }}">#1</a></td>
                <td>Support</td>
                <td><a href="{{ url('cases/read') }}">Case creation</a></td>
                <td>17/10/2015 14:00 PM</td>
               </tr>
               <tr>
                 <td><a href="{{ url('cases/read') }}">#2</a></td>
                 <td>Administration</td>
                 <td><a href="{{ url('cases/read') }}">I did not receive my invoice</a></td>
                 <td>17/10/2015 14:00 PM</td>
               </tr>
              </tbody>
            </table>
            </div>
        </div>

        <div class="clearfix">&nbsp;</div>
        <div class="panel panel-default">
            <div class="panel-heading tocustomer">
                <h3 class="panel-title">Planned meetings</h3>
            </div>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>{{ lang::get('aop.meetings_sdate')}}</th>
                        <th class="col-md-6">Subject</th>
                        <th class="">{{ Lang::get('aop.case_last_update') }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>17/10/2015 12:30 PM</td>
                      <td>Testingwithlongword</td>
                      <td>17/10/2015 14:00 PM</td>
                    </tr>
                    <tr>
                      <td>17/10/2015 12:30 PM</td>
                      <td>Testingwithlongword</td>
                      <td>17/10/2015 14:00 PM</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

        <div class="clearfix">&nbsp;</div>
        <div class="panel panel-default">
            <div class="panel-heading tocustomer">
                <h3 class="panel-title">Open Quotes</h3>
            </div>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>Subject</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td>Testing</td>
                      <td>Testingwithlongword</td>
                      <td>2ndverylongword</td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>

@endsection
