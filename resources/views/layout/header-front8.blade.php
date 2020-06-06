<html>
	
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@section('title') {{ get_option('site_title') }} @show</title>
    <meta name="description" content="Business listings online,post your profile online,post free ads,submit your project for free evaluation,post your whitepapers,post blogs">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	   <!--------Bootstrap Css Library---------->
	   <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css	">
	   <!--------Custom Css Library---------->
	   <link rel="stylesheet" type="text/css" href="../../assets/css/megasStyle.css">
		<!-- Custom Fonts -->
		<link href="../../assets/fonts/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	  <title>:::magas.services:::</title>

    @section('social-meta')
        <meta property="og:title" content="{{ get_option('site_title') }}">
        <meta property="og:description" content="{{ get_option('meta_description') }}">
        <meta property="og:image" content="">
        <meta property="og:url" content="{{ route('home') }}">
        <meta name="twitter:card" content="summary_large_image">
        <!--  Non-Essential, But Recommended -->
        <meta name="og:site_name" content="{{ get_option('site_name') }}">
    @show
	<link href="https://www.magas.services/templates/magas/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

<!-- bootstrap css -->
  
    <!-- Font awesome 4.4.0 -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.4.0/css/font-awesome.min.css') }}">
    <!-- load page specific css -->

    <!-- main select2.css -->
    <link href="{{ asset('assets/select2-3.5.3/select2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/select2-3.5.3/select2-bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/nprogress/nprogress.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/range.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/responsive.css') }}">

    <!-- Conditional page load script -->
    @if(request()->segment(1) === 'dashboard')
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/metisMenu/dist/metisMenu.min.css') }}">
    @endif

<!-- main style.css -->

    <?php use App\Post;$default_style = get_option('default_style'); ?>
    @if($default_style == 'default')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/style-{$default_style}.css') }}">
    @endif

    @yield('page-css')

    @if(get_option('additional_css'))
        <style type="text/css">
            {{ get_option('additional_css') }}
        </style>
    @endif

    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


<script src='https://www.google.com/recaptcha/api.js'></script>
  
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127120890-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127120890-1');
</script>
</head>
<!--<body oncontextmenu="return false;">-->
<body>


<style>
/*@media(max-width: 700px) {*/
/*	#changecolor {*/
/*		color:white;*/
/*	}*/
/*}*/
</style>


	<div id="wrapper">
	<!-------------Header start-------------------->
	<nav class="navbar navbar navBarSection">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand megasbrand" href="#"><img src="../assets/images/logo.png"/></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navigationMenu">
			<li class="active"><a href="{{ route('bizz') }}">BIZZ</a></li>
			<li class=""><a href="{{ route('pro') }}">PRO</a></li>
			<li class=""><a href="{{ route('classifieds') }}">CLASSIFIEDS</a></li>
			<li class=""><a href="{{ route('projects') }}">Opportunities</a></li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="{{ route('catalogue') }}">ALA CARTE</a></li>
				<?php
										if(Auth::user()){
										    ?>
										
										<li><a href="{{ route('packages') }}">PACKAGES</a></li>
										<?php
										}else{
										    ?>
										   <li> <a href="{{ route('user.create') }}">
								PACKAGES
							</a></li>
										    <?php
										}
?>
			  </ul>
			</li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">INSIGHTS <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="{{ route('headlines') }}">HEADLINES</a></li>
				<li><a href="{{ route('blog') }}">BLOGS</a></li>
				<li><a href="{{ route('whitepaper_list') }}">WHITEPAPERS</a></li>
			  </ul>
			</li>
			<li><a href="{{ route('endorsements') }}">NETWORK</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right navigationSign">
			<li><a href="{{ route('user.create') }}" class="megasSignUp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<li><a href="{{ route('login') }}" class="megasSignIn"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	<!-------------Header end-------------------->