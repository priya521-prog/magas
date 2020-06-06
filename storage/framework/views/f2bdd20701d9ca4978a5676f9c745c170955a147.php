
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php $__env->startSection('title'); ?> <?php echo e(get_option('site_title')); ?> <?php echo $__env->yieldSection(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $__env->startSection('social-meta'); ?>
        <meta property="og:title" content="<?php echo e(get_option('site_title')); ?>">
        <meta property="og:description" content="<?php echo e(get_option('meta_description')); ?>">
        <meta property="og:image" content="">
        <meta property="og:url" content="<?php echo e(route('home')); ?>">
        <meta name="twitter:card" content="summary_large_image">
        <!--  Non-Essential, But Recommended -->
        <meta name="og:site_name" content="<?php echo e(get_option('site_name')); ?>">
    <?php echo $__env->yieldSection(); ?>
	<link href="https://www.magas.services/templates/magas/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

<!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-theme.min.css')); ?>">
    <!-- Font awesome 4.4.0 -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font-awesome-4.4.0/css/font-awesome.min.css')); ?>">
    <!-- load page specific css -->

    <!-- main select2.css -->
    <link href="<?php echo e(asset('assets/select2-3.5.3/select2.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/select2-3.5.3/select2-bootstrap.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/toastr/toastr.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/nprogress/nprogress.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('assets/main.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/range.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('assets/responsive.css')); ?>">

    <!-- Conditional page load script -->
    <?php if(request()->segment(1) === 'dashboard'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/admin.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/metisMenu/dist/metisMenu.min.css')); ?>">
    <?php endif; ?>

<!-- main style.css -->

    <?php use App\Post;$default_style = get_option('default_style'); ?>
    <?php if($default_style == 'default'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset("assets/css/style-{$default_style}.css")); ?>">
    <?php endif; ?>

    <?php echo $__env->yieldContent('page-css'); ?>

    <?php if(get_option('additional_css')): ?>
        <style type="text/css">
            <?php echo e(get_option('additional_css')); ?>

        </style>
    <?php endif; ?>

    <script src="<?php echo e(asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')); ?>"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<style>
@media(max-width: 700px) {
	#changecolor {
		color:white;
	}
}
</style>
<header class="main-header">
		<div class="navbar navbar-default navbar-fixed-top scrollspy_menu navbar__initial" role="navigation">
			<div class="top-header">
				<div class="custom-container">
					<div class="fulltop">
                                              <?php if(!Auth::check()): ?>
						<div class="loginbuttonprt">
							<img src="<?php echo e(asset('assets/img/loginicon.png')); ?>">
                                                         
							<a href="<?php echo e(route('login')); ?>" id="changecolor">
								Login or Signup
							</a>
						</div>
                                              <?php endif; ?>
                                            <!--<div class="col-md-8 col-sm-12">-->
                <?php if(Auth::check()): ?>

                    <!--<div class="topContactInfo">-->
                        <ul class="nav nav-pills navbar-right">
                            <li>
                                <a href="<?php echo e(route('profile')); ?>" id="changecolor">
                                    <i class="fa fa-user"></i>
                                    <?php echo app('translator')->get('app.hi'); ?>, <?php echo e($logged_user->name); ?> </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('dashboard')); ?>" id="changecolor">
                                    <i class="fa fa-dashboard"></i>
                                    Dashboard </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>" id="changecolor">
                                    <i class="fa fa-sign-out"></i>
                                    <?php echo app('translator')->get('app.logout'); ?>
                                </a>
                            </li>
                        </ul>
<!--                    </div>-->
               
                <?php endif; ?>

            <!--</div>-->
						<div class="socialprt">
							<ul>
								<li>
									<a id="changecolor" href="https://www.linkedin.com/company/magasintl/" target="_BLANK">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a id="changecolor" href="https://twitter.com/magasintl" target="_BLANK">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a id="changecolor" href="https://www.instagram.com/magasintl/" target="_BLANK">
										<i class="fa fa-instagram"></i>
									</a>
								</li>
								<li>
									<a id="changecolor" href="https://www.facebook.com/MAGASINTL/" target="_BLANK">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a id="changecolor" href="<?php echo e(route('contact_us_page')); ?>">
										<i class="fa fa-envelope"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
			
		
	

<div class="navbar-header">
				<div class="custom-container">
					<div class="fullnav">
						<div class="leftlogoprt">
							<a href="<?php echo url('/');?>" class="header-logo navbar-brand">
								<!--<img alt="logo" src="images/logo.png" class="img-responsive" />-->
                                                                     <img itemprop="image"  src="<?php echo e(asset('assets/img/logo.png')); ?>" class="img-responsive">
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
										<a href="<?php echo e(route('bizz')); ?>">Bizz</a>
									</li>
									<li>
										<a href="<?php echo e(route('pro')); ?>">Pro</a>
									</li>

									<li>
										<a href="<?php echo e(route('classifieds')); ?>">Classifieds</a>
									</li>
									<li>
										<a href="<?php echo e(route('projects')); ?>">PROJECTS</a>
									</li>
									
									<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
									    <ul class="dropdown-menu">
										<li><a href="<?php echo e(route('catalogue')); ?>">ALA CARTE</a></li>
										<li><a href="<?php echo e(route('packages')); ?>">PACKAGES</a></li>

									    </ul>
									</li>
										<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Insights <b class="caret"></b></a>
									    <ul class="dropdown-menu">
									    <li><a href="<?php echo e(route('headlines')); ?>">HEADLINES</a></li>
										<li><a href="<?php echo e(route('blog')); ?>">BLOGS</a></li>
										
										<li><a href="<?php echo e(route('whitepaper_list')); ?>">WHITEPAPERS</a></li>

									    </ul>
									</li>
									
									<!--<li>-->
									<!--	<a href="<?php echo e(route('blog')); ?>">insights</a>-->
									<!--</li>-->
									<li>
										<a href="<?php echo e(route('endorsements')); ?>">network</a>
									</li>
								</ul>

							</div>
						</div>


						<div class="buttonrightpart">
							<!--<a href="<?php echo e(route('createclassifieds')); ?>" class="postbutton">Post Your Ad</a>-->

						</div>
					</div>



				</div>
			</div>
                    </div>
</header>
<?php /**PATH C:\xampp\htdocs\magas_services\resources\views/layout/header-front.blade.php ENDPATH**/ ?>