<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Prosperity Properties | Удирдлагын систем</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">

	<!-- BEGIN GLOBAL MANDATORY STYLES -->     
	{{ HTML::style('assets/plugins/font-awesome/css/font-awesome.min.css')}}   
	{{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css')}}    
	<!-- END GLOBAL MANDATORY STYLES -->
	
	{{ HTML::style('assets/css/style-metronic.css')}}    
	{{ HTML::style('assets/css/style.css')}}
	{{ HTML::style('assets/css/themes/default.css')}}    
	{{ HTML::style('assets/css/pages/login.css')}}

	<link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}" />
</head>

<body class="login">
	<div class="logo"></div>
	<div class="content">
		{{ Form::open(array('url'=>'login', 'class'=>'login-form')) }}
		    <h3 class="form-title">Системд нэвтрэх</h3>
			
			@if(Session::has('error'))
			<div class="alert alert-danger">
				<span>{{ Session::get('error') }}</span>
			</div>
	        @endif
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Хэрэглэгч</label>
				<div class="input-icon">
					<i class="icon-user"></i>
					{{ Form::text('username', null, array('class'=>'form-control placeholder-no-fix', 'placeholder'=>'Хэрэглэгч', 'autocomplete'=>'off')) }}
				</div>
			</div>

			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Нууц үг</label>
				<div class="input-icon">
					<i class="icon-lock"></i>
					{{ Form::password('password', array('class'=>'form-control placeholder-no-fix', 'placeholder'=>'Нууц үг', 'autocomplete'=>'off')) }}
				</div>
			</div>
		 	
		 	<div class="form-actions">
				<button type="submit" class="btn green pull-right">
					Нэвтрэх <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		    
		{{ Form::close() }}
	</div>
	<div class="copyright">2014 &copy; Prosperity Properties</div>

	<!--[if lt IE 9]>
	{{ HTML::script('assets/plugins/respond.min.js"')}}
	{{ HTML::script('assets/plugins/excanvas.min.js')}}
	<![endif]-->   
	{{ HTML::script('assets/plugins/jquery-1.10.2.min.js')}}
	{{ HTML::script('assets/plugins/jquery-validation/dist/jquery.validate.min.js')}}
	{{ HTML::script('assets/scripts/login.js') }}
	<script>
		jQuery(document).ready(function() {
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>