<html>
	<head>
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	   <!--------Bootstrap Css Library---------->
	   <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css	">
	   <!--------Custom Css Library---------->
	   <link rel="stylesheet" type="text/css" href="../assets/css/megasStyle.css">
		<!-- Custom Fonts -->
		<link href="../assets/fonts/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	  <title>:::magas.services:::</title>

	</head>

	<body>
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