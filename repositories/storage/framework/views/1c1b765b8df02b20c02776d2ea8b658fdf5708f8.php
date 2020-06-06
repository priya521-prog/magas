<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
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


<div class="header-nav-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 ">
                <div class="topContactInfo">
                    <ul class="nav nav-pills">
                        <?php if(get_option('site_phone_number')): ?>
                            <li>
                                <a href="callto://+<?php echo e(get_option('site_phone_number')); ?>">
                                    <i class="fa fa-phone"></i>
                                    +<?php echo e(get_option('site_phone_number')); ?>

                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if(get_option('site_email_address')): ?>
                            <li>
                                <a href="mailto:<?php echo e(get_option('site_email_address')); ?>">
                                    <i class="fa fa-envelope"></i>
                                    <?php echo e(get_option('site_email_address')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
            <div class="col-md-8 col-sm-12">
                <?php if(Auth::check()): ?>

                    <div class="topContactInfo">
                        <ul class="nav nav-pills navbar-right">
                            <li>
                                <a href="<?php echo e(route('profile')); ?>">
                                    <i class="fa fa-user"></i>
                                    <?php echo app('translator')->get('app.hi'); ?>, <?php echo e($logged_user->name); ?> </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('dashboard')); ?>">
                                    <i class="fa fa-dashboard"></i>
                                    Dashboard </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>">
                                    <i class="fa fa-sign-out"></i>
                                    <?php echo app('translator')->get('app.logout'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <form action="<?php echo e(route('login')); ?>" class="navbar-form navbar-right" role="form" method="post"> <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="email address">
                        </div>
                        <div class="form-group">
                            <input  type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success"><?php echo app('translator')->get('app.sign_in'); ?></button>
                    </form>
                <?php endif; ?>

            </div>
        </div>
    </div>

</div>

<nav class="navbar navbar-default" role="navigation">
    <!--<div class="container">-->
    <div class="main"><div class="custom-container"><div class="listingbody">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                <?php if(get_option('logo_settings') == 'show_site_name'): ?>
                    <?php echo e(get_option('site_name')); ?>

                <?php else: ?>
                    <?php if(logo_url()): ?>
                        <img src="<?php echo e(logo_url()); ?>">
                    <?php else: ?>
                        <?php echo e(get_option('site_name')); ?>

                    <?php endif; ?>
                <?php endif; ?>

            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <?php
                $header_menu_pages = Post::whereStatus('1')->where('show_in_header_menu', 1)->get();
                ?>
                <?php if($header_menu_pages->count() > 0): ?>
                    <?php $__currentLoopData = $header_menu_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(route('single_page', $page->slug)); ?>"><?php echo e($page->title); ?> </a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

                <?php if( ! Auth::check()): ?>
                    <li><a href="<?php echo e(route('login')); ?>"> <i class="fa fa-lock"></i>  <?php echo e(trans('app.login')); ?>  </a>  </li>
                    <li><a href="<?php echo e(route('user.create')); ?>"> <i class="fa fa-save"></i>  <?php echo e(trans('app.register')); ?></a></li>
                <?php endif; ?>

                <li><a href="<?php echo e(route('create_ad')); ?>"> <i class="fa fa-tag"></i> <?php echo app('translator')->get('app.post_an_ad'); ?></a></li>
                <?php if(get_option('show_blog_in_header')): ?>
                    <li><a href="<?php echo e(route('blog')); ?>"> <i class="fa fa-rss"></i> <?php echo app('translator')->get('app.blog'); ?></a></li>
                <?php endif; ?>
                <li><a href="<?php echo e(route('contact_us_page')); ?>"> <i class="fa fa-mail-forward"></i><?php echo app('translator')->get('app.contact_us'); ?></a></li>

                <?php if(get_option('enable_language_switcher') == 1): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Language <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo e(route('switch_language', 'en')); ?>">English</a></li>
                            <?php $__currentLoopData = get_languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('switch_language', $lang->language_code)); ?>"><?php echo e($lang->language_name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>


        </div><!--/.navbar-collapse -->
    </div>
</nav>
<?php /**PATH /home/sermagas/public_html/beta/resources/views/layout/header.blade.php ENDPATH**/ ?>