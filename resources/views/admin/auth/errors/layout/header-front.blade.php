
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@section('title') {{ get_option('site_title') }} @show</title>
    <meta name="description" content="Business listings online,post your profile online,post free ads,submit your project for free evaluation,post your whitepapers,post blogs">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
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
        <link rel="stylesheet" href="{{ asset("assets/css/style-{$default_style}.css") }}">
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
@media(max-width: 700px) {
	#changecolor {
		color:white;
	}
}

.leftlogoprt .navbar-nav {
    margin: 20px -25px 0 0 ! important;
}

</style>
<header class="main-header">
		<div class="navbar navbar-default navbar-fixed-top scrollspy_menu navbar__initial" role="navigation">
			<!--<div class="top-header">-->
				<div class="custom-container">
					<div class="fulltop" align="right">
                            @if(!Auth::check())
						<div class="loginbuttonprt" >
							<!--<img src="{{asset('assets/img/loginicon.png')}}">-->
                                                         
							<a href="{{ route('user.create') }}"  >
							    <!--<img itemprop="image"  src="{{asset('assets/img/signup2.jpg')}}">--><i class="fa fa-arrow-up" style="color:black"></i>
								Sign Up
							</a><a href="{{ route('login') }}"  >
							    <!--<img itemprop="image"  src="{{asset('assets/img/signin2.png')}}">--><i class="fa fa-sign-in" style="color:black"></i>
								Sign In
							</a>
						</div>
                                              @endif
                                            <!--<div class="col-md-8 col-sm-12">-->
                @if(Auth::check())

                    <!--<div class="topContactInfo">-->
                        <ul class="nav nav-pills navbar-right">
                            <li>
                                <a href="{{ route('profile') }}" id="changecolor">
                                    <i class="fa fa-user"></i>
                                    @lang('app.hi'), {{ $logged_user->name }} </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard') }}" id="changecolor">
                                    <i class="fa fa-dashboard"></i>
                                    Dashboard </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" id="changecolor">
                                    <i class="fa fa-sign-out"></i>
                                    @lang('app.logout')
                                </a>
                            </li>
                        </ul>
<!--                    </div>-->
               
                @endif

            <!--</div>-->
						<!--<div class="socialprt">-->
						<!--	<ul>-->
						<!--		<li>-->
						<!--			<a id="changecolor" href="https://www.linkedin.com/company/magasintl/" target="_BLANK">-->
						<!--				<i class="fa fa-linkedin"></i>-->
						<!--			</a>-->
						<!--		</li>-->
						<!--		<li>-->
						<!--			<a id="changecolor" href="https://twitter.com/magasintl" target="_BLANK">-->
						<!--				<i class="fa fa-twitter"></i>-->
						<!--			</a>-->
						<!--		</li>-->
						<!--		<li>-->
						<!--			<a id="changecolor" href="https://www.instagram.com/magasintl/" target="_BLANK">-->
						<!--				<i class="fa fa-instagram"></i>-->
						<!--			</a>-->
						<!--		</li>-->
						<!--		<li>-->
						<!--			<a id="changecolor" href="https://www.facebook.com/MAGASINTL/" target="_BLANK">-->
						<!--				<i class="fa fa-facebook"></i>-->
						<!--			</a>-->
						<!--		</li>-->
						<!--		<li>-->
						<!--			<a id="changecolor" href="{{ route('contact_us_page') }}">-->
						<!--				<i class="fa fa-envelope"></i>-->
						<!--			</a>-->
						<!--		</li>-->
						<!--	</ul>-->
						<!--</div>-->
					</div>

				</div>
			<!--</div>-->
			
		
	

<div class="navbar-header">
				<div class="custom-container">
					<div class="fullnav">
						<div class="leftlogoprt">
							<a href="<?php echo url('/');?>" class="header-logo navbar-brand">
								<!--<img alt="logo" src="images/logo.png" class="img-responsive" />-->
                                                                     <img itemprop="image"  src="{{asset('assets/img/logo.png')}}" class="img-responsive" height="300" width="300">
							</a>

							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-collapse collapse">
								<ul class="nav navbar-nav">

									<li>
										<a href="{{ route('bizz') }}">Bizz</a>
									</li>
									<li>
										<a href="{{ route('pro') }}">Pro</a>
									</li>

									<li>
										<a href="{{ route('classifieds') }}">Classifieds</a>
									</li>
									<li>
										<a href="{{ route('projects') }}">OPPORTUNITIES</a>
									</li>
									
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
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
										<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Insights <b class="caret"></b></a>
									    <ul class="dropdown-menu">
									    <li><a href="{{ route('headlines') }}">HEADLINES</a></li>
										<li><a href="{{ route('blog') }}">BLOGS</a></li>
										
										<li><a href="{{ route('whitepaper_list') }}">WHITEPAPERS</a></li>

									    </ul>
									</li>
									
									<!--<li>-->
									<!--	<a href="{{ route('blog') }}">insights</a>-->
									<!--</li>-->
									<li>
										<a href="{{ route('endorsements') }}">network</a>
									</li>
								</ul>

							</div>
						</div>


						<div class="buttonrightpart">
							<!--<a href="{{ route('createclassifieds') }}" class="postbutton">Post Your Ad</a>-->

						</div>
					</div>



				</div>
			</div>
                    </div>
</header>
