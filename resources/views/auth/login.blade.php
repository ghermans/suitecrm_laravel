@extends('app_guest')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-4 col-md-offset-3">
             @if (count($errors) > 0)
						<div class="text-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="clearfix">&nbsp;</div>
                    <form method="POST" class="m-t" role="form" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                         <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <input type="email" name="email" class="form-control" placeholder="{{ Lang::get('aop.email') }}" value="{{ old('email') }}" required="">
                        </div>
                        </div>
                        <div class="form-group">
                          <div class="inner-addon left-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                            <input type="password"  name="password" class="form-control" placeholder="{{ Lang::get('aop.password') }}" required="">
                        </div>
                        </div>
                            <div class="clearfix">&nbsp;</div>

                        <button type="submit" class="btn btn-custom">{{ Lang::get('aop.sign_in') }}</button>

                        <a href="{{ url('/password/email') }}">
                            <small>{{ Lang::get('aop.forgot_password') }}</small>
                        </a>
                    </form>

                </div>

        </div>
        </div>
@endsection
