<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todo Application</title>
	
	<link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">
	<link href="{{asset('/css/app.css')}}" rel="stylesheet">
	

	<link rel="stylesheet" type="text/css" href="/css/app.css">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Todo Application</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				

				
			</div>
		</div>
	</nav>
	@if (count($errors) > 0)
	<div class="alert alert-danger">
	<strong>Whoops !!!</strong> There are something weong with the input. <br><br>
	<ul>
		@foreach ($errors->all()as $error)
		<li> {{$error}}</li>
		}
		}
		@endforeach
	</ul>
		
	</div>
	@endif
	@if(Session::has('success'))
	<div class="alert alert-success">
	{{Session::get('success')}}
		
	</div>
	@endif
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	}
</body>
</html>
