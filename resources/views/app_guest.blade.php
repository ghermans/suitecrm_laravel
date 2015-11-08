<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Suite panel - Free customer panel for SuiteCRM</title>

	    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
	    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
	    <link href="{{ asset('css/default.css') }}" rel="stylesheet" type='text/css'>


	    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


        <!--[if lt IE 9]>
		    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
    <body>
        <div class="container wrapper">
            <div class="container-fluid" style="padding-top: 10px; padding-bottom: 20px;">
                <img src="{{asset('img/logo.png')}}" class="pull-left">
                <div class="pull-right">
                    <a href="{{ url('/auth/logout') }}" title="Log out"  data-toggle="tooltip" data-placement="bottom" data-html="true" title="1st line of text <br> 2nd line of text"	><i class="fa fa-sign-out fa-2x"></i></a>
                </div>
            </div>

            <div class="page-container">

              <!-- top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
        	            <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand" href="{{ url('') }}" > {{ Lang::get('aop.portal_name') }} </a>
        	            </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="col-sm-offset-3">
                            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="@if (Request::is('/*')) active @endif">
                                        <a href="{{ url('/') }}">
                                            <i class="fa fa-home fa-lg"></i>
                                        </a>
                                    </li>
                                    <li><a href={{ url('kb') }}>Knowledge base</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                    </div>
                </div>

            <div class="container-fluid">
                <div class="row row-offcanvas row-offcanvas-left">
                    <!-- main area -->
                    <div class="col-xs-12 col-sm-12" style="padding-top: 20px;">
                        @yield('content')
                    </div><!--/row-->
                </div><!--/.col-xs-12.col-sm-9-->
            </div><!--/row-->
        </div><!--/.container-->
    </div>

	<!-- Scripts -->
	<script type="text/javascript">
	$("[data-toggle=tooltip]").tooltip();
	</script>

    </body>
</html>
