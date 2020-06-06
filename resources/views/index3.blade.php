@extends('layout.main-front-header')

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



</style>
<header class="main-header">
		<div class="navbar navbar-default navbar-fixed-top scrollspy_menu navbar__initial" role="navigation">
			<!--<div class="top-header">-->
				<div class="custom-container">
					<div class="fulltop" align="right">
                            @if(!Auth::check())
						<div class="loginbuttonprt" >
							<!--<img src="{{asset('assets/img/loginicon.png')}}">-->
                                                         
							<a href="{{ route('user.create') }}">
							    <!--<img itemprop="image"  src="{{asset('assets/img/signup2.jpg')}}">--><i class="fa fa-arrow-up" style="color:black"></i>
								Sign Up
							</a><a href="{{ route('login') }}">
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
										<a href="{{ route('projects') }}">PROJECTS</a>
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

@section('page-css')
@endsection
<!--@section('main')-->
<style>
.carousel-indicators{
z-index : auto !important;
}
a:hover {
    color:white;
}


 .disabled {
        pointer-events: none;
        cursor: default;
    }s
    .djslider-default .slider-container {
    position: absolute;
    overflow: hidden;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
}
.djslider-default {
    
    margin: 0 auto;
    position: relative;
    -webkit-transition: opacity 400ms ease;
    transition: opacity 400ms ease;
    opacity: 0;
}



</style>

 <div class="container-fluid" id="fluid" style="margin-top: 121px;zoom:100%">
            <div class="row">
                <div class="">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                       
                       <style>
                           .carousel-inner > .item > img, .carousel-inner > .item > a > img {
    /*margin: 0 auto;*/
    width: 100% !important;
}
                       </style>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            @php $i=0; @endphp
                            @foreach($sliders as $slider)
                                <div class="item {{ $i==0? 'active':'' }}">
                                   <a href="{{ $slider->url }}" id="slider_url" target="_blank"><img src="{{ slider_url($slider) }}" alt="Image one"></a> 
                                    <div class="carousel-caption">{{ $slider->caption }} </div>
                                     <!--<div class="carousel-caption"><a href="{{ $slider->url }}" id="slider_url" target="_blank"></a> </div>-->
                                </div>
                                @php $i++; @endphp
                            @endforeach
                        </div>
                         <ol class="carousel-indicators">
                            
                            @php $i=0; @endphp
                            @foreach($sliders as $slider)
                                <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="{{ $i==0? 'active':'' }}" style="color:grey"></li>
                                
                               
                                @php $i++; @endphp
                            @endforeach
                        </ol>
                       
                    </div>
                    
                </div>
            </div>
            
              
        </div>
       <div class="row">
		        <div class="col-md-12">
	<div class="main" style=" padding: 20px !important; ">

		<div class="custom-container">
		    
		    
		            <!--<div class="col-md-2">-->
		        
              <!--      </div>-->
                     <!--<div class="col-md-12">-->
                       
                         <!--</div>-->
                         <!--<div class="col-md-2">-->
                         <!--</div>-->
		          
<div class="well" style="border: 1px solid #591546;padding-top: 6px;padding-bottom: 1px;border-radius: 17px">
             <div class="modern-home-search-bar-wrap">
                        <div class="search-wrapper" style="margin-top: -16px;
    margin-bottom: -45px;">
                            <form class="form-inline" action="{{ route('main_search') }}" method="get"> @csrf
                             <!--<div class="form-group">-->
                             <!--       <h3>SEARCH FILTERS</h3>-->
                             <!--   </div>-->
                                <div class="form-group">
                                   
                                </div>
                               <!--<div class="form-group">-->
                                    <!--<input type="text"  class="form-control" id="searchTerms" name="q" value="{{ request('q') }}" placeholder="@lang('app.search___')" />-->
                                     <!--<input type="text"  class="form-control" id="searchTerms" name="q" value="{{ request('q') }}" placeholder="Service Type" />-->
                                     
                                <!--</div>-->
                                  <div class="form-group">
                                       <div class="select">
                                                            <select class="form-control select2" name="q" id="searchTerms">
                                                                <option value ="">Service Type</option>
                                                                 <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                                                <option value="Actor">Actor</option>
                                                                <option value="Administration">Administration</option>
                                                                <option value="Advertising and Marketing">Advertising and Marketing</option>
                                                                <option value="Accounting & Book Keeping">Accounting & Book Keeping</option>
                                                                <option value="Actor">Actor</option>
                                                                <option value="Administration">Administration</option>
                                                                <option value="Analysts">Analysts</option>
                                                                <option value="Architects">Architects</option>
                                                                <option value="Archivists & Curator">Archivists & Curator</option>
                                                                <option value="Artist">Artist</option>
                                                                <option value="Auditing & Assurance">Auditing & Assurance</option>
                                                                <option value="Authors & Writer">Authors & Writer</option>
                                                                <option value="Cartographers and Surveyor">Cartographers and Surveyor</option>
                                                                <option value="Consultant">Consultant</option>
                                                                <option value="Dancers & Choreographer">Dancers & Choreographer</option>
                                                                <option value="Interior Decorator">Interior Decorator</option>
                                                                <option value="Designer">Designer</option>
                                                                <option value="Designer">Developer</option>
                                                                <option value="Economist">Economist</option>
                                                                <option value="Governmental">Governmental</option>
                                                                <option value="IT Specialist">IT Specialist</option>
                                                                <option value="Lawyer">Lawyer</option>
                                                                <option value="Medical Practitioner">Medical Practitioner</option>
                                                                <option value="Musicians, Singers & Composers">Musicians, Singers & Composers</option>
                                                                <option value="Pharmacist">Pharmacist</option>
                                                                <option value="Physio Therapists">Physio Therapists</option>
                                                                <option value="Public Relation Officer">Public Relation Officer</option>
                                                                <option value="Repairs & Maintenance">Repairs & Maintenance</option>
                                                                <option value="Tax Expert">Tax Expert</option>
                                                                <option value="Teacher">Teacher</option>
                                                                <option value="Therapist">Therapist</option>
                                                                <option value="Trainer">Trainer</option>
                                                                <option value="Translation">Translation</option>
                                                                <option value="Translators & Interpreters">Translators & Interpreters</option>
                                                                <option value="Travel Agent">Travel Agent</option>
                                                                <option value="Visual Artists">Visual Artists</option>
                                                                <option value="Visual Artists">Web & Multimedia</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                
                                <div class="form-group">
                                    <select class="form-control select2" name="sub_category">
                                        <option value="">Select Industry</option>
                                        @foreach($categories as $category)
                                            @if($category->sub_categories->count() > 0)
                                                <optgroup label="{{ $category->category_name }}">
                                                    @foreach($category->sub_categories as $sub_category)
                                                        <option value="{{ $sub_category->id }}">{{ $sub_category->category_name }}</option>
                                                    @endforeach
                                                </optgroup>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                               
                                                        
                                <div class="form-group">
                                        <select class="form-control select2" name="country">
                                            <option value="">Select Country</option>
                                            <option value="">Select Country</option>
                                            <?php
                                          //  dd($countries);
                                            ?>
                                            @foreach($countries as $country)
                                            
                                                <option value="{{ $country->id }}" >{{ $country->country_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                     <div class="form-group">
                                    <select class="form-control select2" id="state_select" name="state">
                                        <option value="">Select State </option>
                                    </select>
                                </div>
                                

                                  <button type="submit" class="btn theme-btn" style="background:#1f2152">SEARCH</button>
                            </form>
                        </div>

                    </div>
</div>

<!--                    <div class="modern-home-search-bar-wrap">-->
<!--			<form class="form-inline" action="{{ route('main_search') }}" method="get">			-->
<!--                            <div class="searchpanel" style="margin-top: -2%;">-->

<!--				<input type="text" name="q" placeholder="Find A Service Provider">-->
<!--				<input type="hidden" name="sub_category">-->
<!--<button type="submit" class="btn topnone"> <i class="fa fa-search"></i> GO</button>-->
<!--			</form>-->

<!--			</div>-->


 

                   <!-- </div>-->
                   
                   <!--</div>-->
		 

			<!--<div class="searchpanel">-->

			<!--	<input type="text" placeholder="Search for an Investment Project, Buyer or Seller  (Company Name, Specialist...etc)">-->

			<!--	<button type="button">SEARCH</button>-->

			<!--</div>-->
			

			<div class="row margintop">
				<div class="col-md-9">
					<div class="tabpanel">
						<!--<div class="heading violet">-->
						<!--	BIZZ   -->
						<!--</div>-->
						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">
						    <li style="float: left;
   
    margin-left: 0px;
    
    background: #EA1C57!important">	<a class="isDisabled" style="color:white">
								BIZZ
								</a></li>
							<li class="active">
								<!--<a  href="{{ route('listyourbusiness') }}" style="cursor: pointer;">-->
								 <!--<a  href="/user/create" target="_blank">-->
								  <a  href="{{ route('advertise') }}" target="_blank">
									Advertise
								</a>
							</li>
							  <li>
								<a href="{{ route('bizz') }}">
									View All
								</a>

							</li>
							
							
                                                      

						</ul>
							



                        	
						<div class="tab-content backnone">
						    
<!--<marquee loop="infinite" scrollamount="10" direction="right">-->
<div class="carousel slide row" data-ride="carousel" data-type="multi" data-interval="2000" id="carousel_n" style="width: 100%;
   
    
    overflow-y: hidden;
    overflow-x: visible;
    white-space:nowrap;">
<!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
    
     <div class="slide" style="display: inline-block;">
                                                     @if($bizz_ads->count() > 0)
							<div id="advertise" class="tab-pane fade in active">
								<div class="complogoprt">
									<ul>
									   
                                                                              @foreach($bizz_ads as $ad)
                                                          <?php $i = 1;?>
										<li style="border-right:none">
										    <?php
										    if(Auth::user()){
					?>
                                                                                     <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                                                                                     <?php
	}else{
	?>
	<a href="/user/create">                                              <?php
	}
	?>
                                                                                     <!--<a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">-->
			
											<div class="compLogo">
                                                                                           <?php if ($ad->business_image== "") { ?>
									<img src="<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:120px;height:120px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:120px;height:120px">
									<?php } ?>
											</div>     
											<!--<h3>{{ $ad->title }}</h3><br>-->
                                                                                                                                                
												<span>{{ $ad->sub_category->category_name }}</span>
											<h4>{{ $ad->country->country_name  }}</h4>
										
                                                                                         </a>

										</li>

                                         	<?php if ($i++ == 10) break; ?>                                    
									<?php //if($i++==2){ break;} ?>
									<!--<?php //$i++; ?>-->
								
									 @endforeach

									</ul>                                    <div class="clearfix"></div>

								</div>

							</div>

							<div id="connect" class="tab-pane fade">

								Connect

							</div>

                                                       @endif
                                                       </div>
                                                       </div>
                                                       <!--</marquee>-->

						</div>
						

					</div>

				</div>

				<div class="col-md-3">
                        	<div class="tabpanel">
						
						<ul class="nav nav-tabs fullnavtablog">
							<li class="active">
								<a  href="{{ route('bespoke') }}" style="cursor: pointer;">
									BESPOKE
								</a>
							</li>
							<!--  <li>-->
							<!--	<a href="{{ route('bizz') }}">-->
							<!--		View All-->
							<!--	</a>-->

							<!--</li>-->
							
							
                                                      

						</ul>
						</div>
							
							
                                                      

						</ul>
					<div class="adprt" style="border: 1px solid #ccc;width:267px;
    height:183px;">

						 <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">-->
 

  <!-- Wrapper for slides -->
  <!--<div class="carousel-inner">-->
    				
	<!--<div class="item">-->
			     <!-- 		<img src="https://www.dance.nyc/uploads/ad-sample-250x250.gif" alt="Chicago">-->
			    	<!--</div>-->
			    
				<!--<div class="item active">-->
			      		<!--<img src="https://kakiseni.org/wp-content/uploads/2018/03/250X250.png" alt="Chicago">-->
			      		<!--<img src="http://beta1.magas.services/uploads/businesslogo/2019-11-19 04_16_41dream days.jpg" alt="Chicago" style="height:183px">-->
      					      						<a href="https://diplomatssummit.com" target="_blank">	<img src="http://beta1.magas.services/uploads/businesslogo/WhatsApp Image 2020-02-25 at 8.49.08 AM (1)-min.jpeg" alt="Chicago" style="height:183px;width: 100%;"></a>	
    				<!--</div>-->

<!--  </div>-->

<!--</div>-->


					</div>

				</div>

			</div>



		<div class="row margintop">

				<div class="col-md-7">

					<div class="tabpanel padnone">

						<!--<div class="heading blue">-->
						<!--	Pro-->
						<!--</div>-->
						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 3px solid #ddd;">
						<li style="float: left;
   
    margin-left: 0px;
    
    background: #1D2053!important">	<a class="isDisabled" style="color:white">
								PRO
								</a></li>
                                                       
<li class="active">

								<!--<a href="{{ route('create_proad') }}" style="cursor: pointer;">-->
								 <!--<a  href="/user/create" target="_blank">-->
								  <a  href="{{ route('advertise') }}" target="_blank">
									Advertise
								</a>
							</li>
 <li>
								<a href="{{ route('pro') }}">
									View All
								</a>
							</li>
							
						</ul>

                                            <div class="tab-content" style="background: #f5f5f5;">
                                                                             @if($pro_ads->count() > 0)
         

							<div id="advertise2" class="tab-pane fade in active">
								<div class="maninto">
<?php $pro = 1;?>
                                                                     <ul style="margin-left:-16px">
                        @foreach($pro_ads as $ad)
										<li style="">
										
                                         

<?php if ($ad->business_image== "") { ?>
									
									
									<?php

	if(Auth::user()){
					?>
                                                                                     <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                                                                                     <?php
	}else{
	?>
										<a href="/user/create">   
										  <?php
	}
	?>
									    <img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:70px;height: 90px;
    overflow: hidden;margin-right: 1px;" class="img-circle"></a>
									<?php } else { ?>
									<!--<a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">-->
										<?php

	if(Auth::user()){
					?>
                                                                                     <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                                                                                     <?php
	}else{
	?>
										<a href="/user/create">   
										  <?php
	}
	?>
									    <img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:90px;height: 90px;
    overflow: hidden;margin-right: 1px;" class="img-circle"></a>
									<?php } ?>

                                                                                            



											<div class="manintoinner">

                                                   
                                                                                             	<?php

	if(Auth::user()){
					?>
                                                                                     <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                                                                                     <?php
	}else{
	?>
										<a href="/user/create">   
										  <?php
	}
	?>   

												<h3 style="text-transform: capitalize;">
												    
												    <?php
												    $words = explode( " ", $ad->title  );
							   // dd($words);
$e=array_slice( $words,0,2);
$t=implode( " ", $e );
		echo $t;										    ?>
												    
												    </h3><br>
										    		<h4 style="text-transform: capitalize;">{{ $ad->designation }}</h3> 
												<p><h5>{{ $ad->country->country_name }}</h5></p>
<br>
                                                                                             </a>

											</div>

                                                                                   

										</li>
									<?php if ($pro++ == 6) break; ?>

									 @endforeach

                        

                        </ul>

								</div>

							</div>

							

						</div>

						

                                                                                

    @endif

			

					</div>



				</div>

                 -
				<div class="col-md-5" style="margin-top: -24px;">



					<div class="tabpanel">

						<!--<div class="heading yellow">-->

						<!--	Classifieds-->

						<!--</div>-->

						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">
						     <li style="float: left;
   
    margin-left: 0px;
    
    background: #f7f701 !important">	<a class="isDisabled" style="color:black">
								CLASSIFIEDS
								</a></li>
<li class="active">
								<a style="cursor: pointer;" href="{{  route('createclassifieds') }}">
									Post for free
								</a>
							</li>

							<li>
								<a  href="{{  route('classifieds') }}">
									View All
								</a>
							</li>
							
						</ul>
<?php
function shortDescription($fullDescription) {
$shortDescription = "";
$fullDescription = trim(strip_tags($fullDescription));
if ($fullDescription) {
		$initialCount = 100;
		if (strlen($fullDescription) > $initialCount) {
			$shortDescription = substr($fullDescription,0,$initialCount)."…";
		} else {
			return $fullDescription;
		 }
}
return $shortDescription;
}//End of function shortDescription

?>


						<div class="tab-content padnone">

							<div id="free" class="tab-pane fade in active">

								<div class="advertiseList">

                                              @if($classifieds_ads->count() > 0)

						<ul>
<?php $class = 1;?>
							@foreach($classifieds_ads as $ad)
						            <li> 
						                 <?php
					
	if(Auth::user()){
					?>
                                                                                     <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                                                                                     <?php
	}else{
	?>
	<a href="/user/create">                                              <?php
	}
	?>
						         <h3 style="float:right">  <i class="fa fa-map-marker"></i> {{ $ad->country->country_name }}</h3> 
						         <h3>{{ $ad->title }}</h3>
						         <div class="text" style="overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 2; /* number of lines to show */
   -webkit-box-orient: vertical;"><?php echo shortDescription($ad->description);?></div>
						         	  <!--<hr style="color:red">-->
						         	 
						                 </a>
						                
						            </li>
						          
									<?php if ($class++ == 4) break; ?>
								
							@endforeach
							</ul>
						@endif

									

								</div>

							</div>

							<div id="View" class="tab-pane fade">

								Hire

							</div>

						</div>

					</div>

				</div>

			</div>





			<div class="row margintop">

				<div class="col-md-9">

					<div class="tabpanel">

						<!--<div class="heading green">-->

						<!--	Projects-->

						<!--</div>-->

						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">

                            <li style="float: left;
   
    margin-left: 0px;
    
    background: #EA1C57 !important">	<a class="isDisabled" style="color:white">
								PROJECTS
								</a></li>

							<li class="active">

								<a  href="{{ route('projectevaluation') }}" style="cursor: pointer;">

									Post a project

								</a>

							</li>

							<li>

								<a  href="{{ route('projects') }}">

									View all

								</a>

							</li>

						</ul>

						<div class="tab-content padnonetwo" style="background: #f5f5f5;">

							<div id="project" class="tab-pane fade in active">

								<div class="projectList">

									            @if($opportunities_ads->count() > 0)

                        <ul>
<?php $projects = 1;?>
                        @foreach($opportunities_ads as $ad)

										<li style="padding:0%">
 <?php
					
	if(Auth::user()){
					?>
                                                                                     <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                                                                                     <?php
	}else{
	?>
	<a href="/user/create">                                              <?php
	}
	?>
                                                                                   
                                                                                     <h3>{{ $ad->title }}</h3> 

                                 <i class="fa fa-map-marker"></i> {{ $ad->country->country_name  }}<br>
                                <B>Industry:</B> {{ $ad->sub_category->category_name  }}<br>
                                <B>Requirement:</B> {{ $ad->requirement  }}
                                  <!--<i class="fa fa-map-marker"></i> {{ $ad->country->country_name  }}<br>-->
                                 <!--Industry: {{ $ad->sub_category->category_name  }}-->
                                 

                                                                                     </a><br>
                                                                                    <button style="background-color: white;padding: 0px 8px;border:2px solid #191a50;border-radius:12px;margin-left:40px;border-radius:12px;" class="btn btn-primary"> 
                                                                                     <?php
					
	if(Auth::user()){
					?>
                                               <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}" style="
    font-size: 12px;color: #2c3e50;
    
    font-weight: 500;">VIEW</a>
                                                                                     <?php
	}else{
	?>
	                        
	   <a href="/user/create" style="font-size: 12px;color: #2c3e50;font-weight: 500;">VIEW</a>
	<?php
	}
	?>
                                                                                 </button>

											

											

										</li>
<?php if ($projects++ == 5) break; ?>				

                        @endforeach

                        

                        </ul>

    @endif

		

								</div>

							</div>

							

						</div>

					</div>

				</div>

				<div class="col-md-3">



					<div class="housesevice">

						<h2>In-House Services</h2>

						<div class="servicebox" style="overflow: auto;height: 14.0em">

						<ul>

										<li>

											<a href="page/business-valuation">  Business Valuation</a>			

										</li>

											<li>

												<a href="page/deal-sourcing">

												 Deal Sourcing

											</a>

											</li>

											<li>

											<a href="page/deal-structuring">

												  Deal Structuring 

											</a>

											</li>

											<li>

											<a href="page/deals-execution">

												 Deals Execution

											</a>												

											</li>

											<li>

											<a href="page/due-diligence">

												  Due Diligence 

											</a>

											</li>

											<li><a href="page/joint-ventures">

												Joint Ventures

											</a>

											</li>

											<li><a href="page/sensitivity-analysis">

												  Sensitivity Analysis 

											</li>

											<li>

											  <a href="page/sustainability-testing-and-analysis">

												 Sustainability Analysis

											</a>

											</li>										

											<!--	<li>-->

											<!--  <a href="page/sustainability-testing-and-analysis">-->

											<!--	 Sustainability Analysis-->

											<!--</a>-->

											<!--</li>-->
											<!--	<li>-->

											<!--  <a href="page/sustainability-testing-and-analysis">-->

											<!--	 Sustainability Analysis-->

											<!--</a>-->

											<!--</li>-->
											<!--	<li>-->

											<!--  <a href="page/sustainability-testing-and-analysis">-->

											<!--	 Sustainability Analysis-->

											<!--</a>-->

											<!--</li>-->

										</ul>

						</div>

					</div>

				</div>

			</div>



			<div class="row margintop">

				<div class="col-md-9">

					<div class="tabpanel">

						<!--<div class="topheadingpanel" id="myDIV">-->
						     
							<!--<a class="tabbutton active" id="btn1">Services</a>-->

							<!--<a class="tabbutton" id="btn2">Sector</a>-->

						<!--</div>-->


                        <ul class="tab">
                                                           <li style="float: left;
   
    margin-left: 0px;
    
    
    background: #1D2053 !important;;padding: 5px 7px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;border-top-left-radius: 7px;
    border-top-right-radius: 7px;">	<a  class="tabbutton active" style="color:white;padding: 5px 20px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;" id="btn1">
								SERVICES
								</a></li>
								  <li style="float: left;
   
    margin-left: 5px;
   
    background: grey !important;;padding: 5px 7px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;border-top-left-radius: 7px;
    border-top-right-radius: 7px;">	<a  class="tabbutton" style="color:white;padding: 7px 20px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;" id="btn2">
								SECTOR
								</a></li>
                            </ul>
						<div class="div1">

							<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">

    <!--                              <li style="float: left;-->
   
    <!--margin-left: 0px;-->
    
    <!--background: #1D2053 !important">	<a  class="tabbutton active" style="color:white" id="btn1">-->
				<!--				SERVICES-->
				<!--				</a></li>-->
				<!--				  <li style="float: left;-->
   
    <!--margin-left: 0px;-->
    
    <!--background: grey !important">	<a  class="tabbutton" style="color:white" id="btn2">-->
				<!--				SECTOR-->
				<!--				</a></li>-->
				<!--<div class="topheadingpanel" id="myDIV">-->
				<!--	<a class="tabbutton active" id="btn1">Services</a>-->

				<!--			<a class="tabbutton" id="btn2">Sector</a>-->
				<!--			</div>-->

								<li class="active">

									<!--<a data-toggle="tab" href="#package" style="margin-top: 3px;">-->
									    	<a  href="{{ route('packages') }}" style="cursor: pointer;margin-top: 3px;">
                                        
										Packages

									</a>

								</li>

								<li>

									<a  href="{{ route('catalogue') }}" style="cursor: pointer;margin-top: 3px;">

											ALA CARTE

									</a>

								</li>

							</ul>

							<div class="tab-content" style="background: #f5f5f5;">

								<div id="package" class="tab-pane fade in active">

									<div class="packageiconprt">

										<ul>

											<li>

												<a href="page/business-valuation"><img src="uploads/theme/icon1.png">  Business Valuation</a> 



											</li>

											<li>

											<a href="page/deal-sourcing">

												<img src="uploads/theme/icon2.png"> Deal Sourcing

											</a>

											</li>

											<li>

											<a href="page/deal-structuring">

												<img src="uploads/theme/icon3.png">  Deal Structuring 

											</a>

											</li>

											<li>

											<a href="page/deals-execution">

												<img src="uploads/theme/icon4.png"> Deals Execution

											</a>												

											</li>

											<li>

											<a href="page/due-diligence">

												<img src="uploads/theme/icon5.png">  Due Diligence 

											</a>

											</li>

											<li><a href="page/joint-ventures">

												<img src="uploads/theme/icon6.png"> Joint Ventures

											</a>

											</li>

											<li>

											<a href="page/sensitivity-analysis">

												<img src="uploads/theme/icon7.png">  Sensitivity Analysis 

												</a>

											</li>

											<li>

											  <a href="page/sustainability-testing-and-analysis">

												<img src="uploads/theme/icon8.png"> Sustainability Analysis

											</a>

											</li>
											

											

										</ul>

									</div>

								</div>

								<div id="carte" class="tab-pane fade">

									services carte

								</div>

							</div>

						</div>



						<div class="div2">

							<ul class="nav nav-tabs fullnavtablog">



								<li class="active">

									<a data-toggle="tab" href="#package2">

										Packages

									</a>

								</li>

								<li>

									<a  href="{{ route('contact_us_page') }}">

											CONTACT US

									</a>

								</li>

							</ul>

							<div class="tab-content padnonetwoo" style="background: #f5f5f5;">

								<div id="package2" class="tab-pane fade in active">

									<div class="packageiconprt">

										<ul>

											<li>

												<a href="page/education"><img src="uploads/theme/icon1.png">  Education</a> 



											</li>

											<li>

											<a href="page/healthcare">

												<img src="uploads/theme/icon2.png"> Health Care

											</a>

											</li>

											<li>

											<a href="page/media">

												<img src="uploads/theme/icon3.png">  Media 

											</a>

											</li>

											<li>

											<a href="page/oil-gas">

												<img src="uploads/theme/icon4.png"> Oil & Gas

											</a>												

											</li>

											<li>

											<a href="page/real-estate">

												<img src="uploads/theme/icon5.png">  Real Estate 

											</a>

											</li>

											<li><a href="page/trading">

												<img src="uploads/theme/icon6.png"> Trading

											</a>

											</li>

											<li>

											<a href="page/travel-tourism">

												<img src="uploads/theme/icon7.png">  Travel & Tourism

												</a>

											</li>

											

											

											

										</ul>

									</div>

								</div>

								<div id="carte2" class="tab-pane fade">

									sector carte

								</div>

							</div>

						</div>



					</div>

				</div>

				<div class="col-md-3">



					<div class="housesevice">

						<h2>Outsource to us</h2>

						<div class="servicebox" style="overflow: auto;height: 12.0em"> 

							<ul>

							<li>

								<a href="page/accounting">Accounting</a>

							</li>

							<li>

								<a href="page/auditing">Auditing</a>

							</li>

							<li>

								<a href="page/advertising">Advertising</a>

							</li>

							<li>

								<a href="page/business-advisory">Business Advisory</a>

							</li>

							<li>

								<a href="page/business-plan-writing">Business Plan Writing</a>

							</li>

							<li>

								<a href="page/brand-consultancy">Brand Consultancy</a>

							</li>

							<li>

								<a href="page/feasibility-studies">Feasibility Studies</a>

							</li>

							<li>

								<a href="page/insurance">Insurance</a>

							</li>

							<li>

								<a href="page/management-consultancy">Management Consultancy</a>

							</li>

							

						</ul>

						</div>

					</div>

				</div>

			</div>






				<!--<div class="col-md-3">-->

				<!--	<div class="housesevice">-->

				<!--		<div class="topfollowheadprt">-->

				<!--			<h3>Follow us on</h3>-->

				<!--			<div class="rightsocial">-->

				<!--				<ul>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<i class="fa fa-linkedin"></i>-->

				<!--						</a>-->

				<!--					</li>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<i class="fa fa-twitter"></i>-->

				<!--						</a>-->

				<!--					</li>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<i class="fa fa-instagram"></i>-->

				<!--						</a>-->

				<!--					</li>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<i class="fa fa-facebook"></i>-->

				<!--						</a>-->

				<!--					</li>-->

				<!--				</ul>-->

				<!--			</div>-->

				<!--		</div>-->



				<!--		<div class="blogsection">-->

				<!--			<div class="blognameprt">-->

				<!--				<div class="leftnameblog">-->

				<!--					--------->

				<!--					<span>-->

				<!--						<h3>Magnas</h3>-->

				<!--						<h4>engagement</h4>-->

				<!--					</span>-->



				<!--				</div>-->

				<!--				<a>-->

				<!--					<i class="fa fa-twitter"></i>-->

				<!--				</a>-->

				<!--			</div>-->



				<!--			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard-->

				<!--				dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen-->

				<!--				book.-->

				<!--			</p>-->



				<!--			<div class="imgprt">-->

				<!--				<img src="uploads/theme/blog-img.png">-->

				<!--				<div class="downiminto">-->

				<!--					<h3>Lorem Ipsum is simply dummy text</h3>-->

				<!--					<p>October 20, 2019</p>-->

				<!--				</div>-->

				<!--			</div>-->



				<!--			<div class="uploadprt">-->

				<!--				<ul>-->

				<!--						<li>-->

				<!--								<a>-->

				<!--									<img src="uploads/theme/like-con.png">-->

				<!--								</a>-->

				<!--							</li>-->

				<!--					<li>-->

				<!--						<a>-->

				<!--							<img src="uploads/theme/boxlogin.png">-->

				<!--						</a>-->

				<!--					</li>-->

				<!--				</ul>-->

				<!--				<p>Oct 20, 2019</p>-->

				<!--			</div>-->

				<!--		</div>-->

				<!--	</div>-->



				<!--</div>-->

<!--			</div>-->
	<div class="row margintop">
			    

				<div class="col-md-9">

					<div class="tabpanel">

					

						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">

							<li style="float: left;margin-left: 0px;background: #EA1C57!important">	<a class="isDisabled" style="color:white">
								INSIGHTS
								</a>
							</li>
							  <li style="float:left">
								<a data-toggle="tab" href="#headline" style="color:white;background: grey !important;padding: 7px 20px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;color:white">
									Headlines
								</a>
                                  
							</li>
							<li style="float:left">
								<a data-toggle="tab" href="#blogs" style="color:white;padding: 7px 20px;
    font-size: 13px;
   
    border-left: none!important;
    border-top: none!important;
    border-right: none!important;
    text-transform: uppercase;
    font-weight: 700;color:white;background: grey !important;">
                                Blogs
								</a>
							</li>
		                  
						</ul>
						<br><br>
						<div class="row">
						<div class="col-md-12">
	<div class="col-md-5">

										<div class="topvideoprt">
										
											 <!--<iframe width="100%" height="200" src="https://www.youtube.com/embed/SazITH8P8xA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
											 <iframe width="100%" height="200" src="https://www.youtube.com/embed/bUI9jkQLwFs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div><br>
											  <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px" class="btn btn-primary"> <a href="{{  route('videos') }}" style="color: #2c3e50;font-size: 13px;font-weight: 500;">VIEW ALL</a></button>
									
									</div>
									<div class="col-md-7">
<div class="tab-content">
							
						
							<div id="media" class="tab-pane fade">

		<!--					         <a class="twitter-timeline" data-tweet-limit="1" data-width="20"-->
  <!--data-height="20" href="https://twitter.com/magasintl?ref_src=twsrc%5Etfw">Tweets by magasintl</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
							      
							  
							</div>
						<div id="headline" class="tab-pane fade in active">
						      <?php
	$rss = new DOMDocument();
 	$rss->load('http://www.moneycontrol.com/rss/latestnews.xml');
// $rss->load('https://www.economictimes.indiatimes.com/rss/latestnews.xml');
	
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
// 			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
// 			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 4;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
// 		$description = $feed[$x]['desc'];
// 		$date = date('l F d, Y', strtotime($feed[$x]['date']));
?>
<!--<img src="<?php //echo url('/');?>/uploads/theme/pointimg.png">&nbsp;&nbsp; -->
<?php
		echo '<p><img src="../uploads/theme/pointer-01.png
">&nbsp;&nbsp;<strong><a href="'.$link.'" title="'.$title.'" style="margin-left:1px">'.$title.'</a></strong><br />';
// 		echo '<small><em>Posted on '.$date.'</em></small></p>';
// 		echo '<p>'.$description.'</p>';
	}
                            
?><br>
                            
						  
						    </div>
						     <!--<button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px" class="btn btn-primary"> <a href="{{  route('headlines') }}" style="color: #2c3e50;font-size: 13px;font-weight: 500;">VIEW ALL</a></button>-->
                        
							<div id="blogs" class="tab-pane fade">
							    <?php $i=1; ?>
							       @foreach($posts as $ad1)
							       
							      
							       <!--<a href="{{ route('blog_single', $ad1->id) }}" class="blog-title">-->
                                                                                       <a href="{{  route('author_blog_posts', [$ad1->id]) }}">
                                                                                     <p> <img src="<?php echo url('/');?>/uploads/theme/pointimg.png">&nbsp;&nbsp;<b>{{ $ad1->title }}</b></p> 
                                
                                                                                     </a>
                                                                                     	<?php if($i++==5){ break;} ?>
								 @endforeach
								
						 <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px" class="btn btn-primary"> <a href="{{  route('blog') }}" style="color: #2c3e50;font-size: 13px;font-weight: 500;">VIEW ALL</a></button>
							</div>
							<div id="white" class="tab-pane fade">
								@if($whitepapers_ads->count() > 0)
												             <!--<p style="font-size:5px">-->
                        <ul>
                            <?php $i=1; ?>
                        @foreach($whitepapers_ads as $ad)
                       
										<!--<li>-->
									
										    
                                                                                     <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                                                                                     <!--<p><b>{{ $ad->title }}</b></p> -->
                                 <!--<p>{{ $ad->description }}</p>-->
                                                                     <div class="compLogo">
                                                                                           <?php if ($ad->business_image== "") { ?>
									<img src="<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:200px">
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:200px">
									<?php } ?>
											</div>          <br>   
											  <!--<button> <a href="{{  route('whitepaper') }}">VIEW ALL</a></button>-->
											   <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px" class="btn btn-primary"> <a href="{{  route('whitepaper_list') }}" style="color: #2c3e50;font-size: 13px;font-weight: 500;">VIEW ALL</a></button>
											</a>
										<!--</li>-->
										
									<?php if($i++==1){ break;} ?>
								
                        @endforeach
                        
                        </ul>
                        	<!--</p>-->
    @endif
							</div>
						</div></div>
						</div>
						</div>
						<br><br>
					</div>
				
				</div>
	
                <div class="col-md-3">
      <!--          	<div class="heading pink">-->

						<!--	Media-->

						<!--</div>-->
							<ul class="nav nav-tabs fullnavtablog">
						<li style="float: left;
   
    margin-left: 0px;
    
    background: #EA1C57!important">	<a data-toggle="tab"  href="#list" style="color:white">
								WHITEPAPER
								</a></li>
									<li>

						<a   href="{{ route('create_your_whitepaper') }}" style="color:#f11e5d!important; ">

									POST

								</a>

							</li>
								</ul>
                   

<!--							</ul>-->
                    <div class="housesevice">

						<div class="topfollowheadprt">
	
						 
						
						
							
						    </div>
						    
						    <div>
						    <div id="list" class="tab-pane fade in active" style="margin-top:3px">
						    <?php
						   // print_r($whitepapers_ads);
						    ?>
								@if($whitepapers_ads->count() > 0)
												             <!--<p style="font-size:5px">-->
                        <ul>
                            <?php $i=1; ?>
                        @foreach($whitepapers_ads as $ad)
                       
										<!--<li>-->
									
										    <p><b>{{ $ad->title }}</b></p> 
										    	<?php
					
	if(Auth::user()){
					?>
                                                                                     <a href="{{  route('single_ad', [$ad->id, $ad->slug]) }}">
                                                                                     <?php
	}else{
	?>
	<a href="/user/create">                                              <?php
	}
	?>
                                 <!--<p>{{ $ad->description }}</p>-->
                                                                     <div class="compLogo" style="border: 2px solid darkgrey;">
                                                                                           <?php if ($ad->business_image== "") { ?>
									<img src="<img src="<?php echo url('/');?>/uploads/placeholder.png" style="width:150px;" >
									<?php } else { ?>
									<img src="<?php echo url('/');?>/uploads/businesslogo/<?php echo $ad->business_image;?>" style="width:150px;">
									<?php } ?>
											</div> 
											  
											 <button style="background-color: white;padding: 1px 9px;border:2px solid #191a50;border-radius:12px;margin-top:0px" class="btn btn-primary">  <a href="{{  route('whitepaper_list') }}" style="color:#2c3e50;font-size: 13px;
    font-weight: 500;">VIEW ALL</a></button>
											  
											</a>
										<!--</li>-->
										
									<?php if($i++==1){ break;} ?>
								
                        @endforeach
                        
                        </ul>
                        	<!--</p>-->
    @endif
							</div>
                </div>
			</div>
				</div>


   </div>

       
		

			<div class="row margintop">

				<div class="col-md-12">

					<div class="tabpanel">

						<!--<div class="heading grey">-->

						<!--	Network-->

						<!--</div>-->

						<ul class="nav nav-tabs fullnavtablog" style="border-bottom: 1px solid #ddd;">


	<li style="float: left;
   
    margin-left: 0px;
    
    background: #1D2053!important">	
    <!--<a class="isDisabled" style="color:white">-->
    	<a href="<?php echo url('/');?>/endorsements" target="_blank" style="cursor: pointer;color:white">
								NETWORK
								</a></li>
									<li>
								<!--<a href="<?php //echo url('/');?>/endorsements" style="cursor: pointer;">-->
								 <!--<a href="{{ asset('assets/downloads/MAGAS-FORM-KYC.pdf') }}" style="cursor: pointer">-->
 <?php
								  if (Auth::user()) {  
								      ?>
								      <a  href="{{ route('associate') }}" style="cursor: pointer; border:solid transparent;color: #f11e5d!important;">
                                        ASSOCIATE & EARN
										
								</a>
								       
								      
								      <?php
								  }else{
								  ?>
								  
								 <a  href="/user/create" style="cursor: pointer; border:solid transparent;color: #f11e5d!important;">
                                        ASSOCIATE & EARN
										
								</a>
								<?php
								  }
								  ?>
							</li>

						
						
						
	<li>
								<a data-toggle="tab" href="#partner">
									Partners
								</a>
							</li>
									<li>
								<a data-toggle="tab" href="#clients">
									Clients
								</a>

							</li>
							

						</ul>

						<div class="tab-content backnone">

							<div id="earn" class="tab-pane fade">

								<div class="prtnerlogoprt">

									

								</div>

							</div>

							<div id="partner" class="tab-pane fade">

								<div class="prtnerlogoprt">

									<?php
									 $client = 1;
								
                                                
                                                foreach($partners as $partner){
                                                   
                                                    // echo "<img src='../uploads/logos/.$partner->media_name;'>";
                                                ?>
                                              
                                              
                                                <img src="<?php echo '../uploads/logos/'.$partner->media_name;?>" width="150px"
    height="100px" hspace="20"/>

                                               
                                                <?php
                                                 if ($client++ == 6) break; 
                                               }
                                                ?>


								</div>

							</div>

							<div id="clients" class="tab-pane fade in active">

							<div class="prtnerlogoprt">

									
									
									
									<?php
									
                                                $partner=1;
                                                foreach($clients as $client){
                                                   
                                                    // echo "<img src='../uploads/logos/.$partner->media_name;'>";
                                                ?>
                                              
                                              
                                                <img src="<?php echo '../uploads/logos/'.$client->media_name;?>" width="150px"
    height="100px" hspace="20"/>

                                               
                                                <?php
                                                 if ($partner++ == 6) break; 
                                               }
                                                ?>

								</div>

							</div>





						</div>

					</div>

				</div>

			</div>

		</div>

	</div>
	<div class="clearfix"></div>
	<div class="arrowup">
	<!--<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button title="Go to top">-->
		<!--<a href="javascript:" id="return-to-top" onclick="topFunction()">-->
		<!--	<i class="fa fa-angle-double-up"></i>-->
		<!--</a>-->
			<a href="" id="return-to-top" onclick="topFunction()"  id="myBtn">
			<i class="fa fa-angle-double-up"></i>
		</a>
	</div>
@endsection
@section('page-js')

    <script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}"></script>
 <!--   <script type="text/javascript"> -->
	<!--	$(window).load(function() { -->
	<!--		$(".carousel .item").each(function() { -->
	<!--			var i = $(this).next(); -->
	<!--			i.length || (i = $(this).siblings(":first")), -->
	<!--			i.children(":first-child").clone().appendTo($(this)); -->
				
	<!--			for (var n = 0; n < 4; n++)(i = i.next()).length || -->
	<!--			(i = $(this).siblings(":first")), -->
	<!--			i.children(":first-child").clone().appendTo($(this)) -->
	<!--		}) -->
	<!--	}); -->
	<!--</script> -->
    	<script>
		$('.tabbutton').click(function () {

			if (this.id == 'btn1') {
				$('.div1').show();
				$('.div2').hide();
                                $('#btn2').removeClass('active');
			    $('#btn1').addClass('active');
			} else {
				$('.div1').hide();
				$('.div2').show();
                                $('#btn1').removeClass('active');
				$('#btn2').addClass('active');
			}
		})
	</script>

<script>
 
jQuery(document).ready(function() {
 
 
 
jQuery('.carousel[data-type="multi"] .item').each(function(){
 
var next = jQuery(this).next();
 
if (!next.length) {
 
next = jQuery(this).siblings(':first');
 
}
 
next.children(':first-child').clone().appendTo(jQuery(this));
 
 
 
for (var i=0;i<2;i++) {
 
next=next.next();
 
if (!next.length) {
 
next = jQuery(this).siblings(':first');
 
}
 
next.children(':first-child').clone().appendTo($(this));
 
}
 
});
 
 
 
});
 
</script>
<script type="text/javascript">
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
//alert("vhbj");
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<style type="text/css">
#slider_url{color: white;
    font-size: 24px;}
</style>
<style type="text/css">

@media only screen and (max-width: 599px)
.maninto ul li {
width:0%;
}
@media only screen and (max-width: 599px)
.manintoinner{
margin-right: 21px;
}
@media only screen and (max-width: 600px) {

.container-fluid{
margin-top: 3px;
}
}
</style>
<script>

</script>
@endsection

