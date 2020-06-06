<?php $__env->startSection('page-css'); ?>
<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>


    <!--<div class="jumbotron jumbotron-xs" style='margin-top:10%'>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6">-->
    <!--                <h2><?php echo e($title); ?></h2>-->
    <!--            </div>-->
    <!--            <div class="col-md-6">-->
    <!--                <div class="blog-breadcrumb">-->
    <!--                    <ul class="breadcrumb">-->
    <!--                        <li>-->
    <!--                            <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a>-->
    <!--                        </li>-->
    <!--                        <li>-->
    <!--                            <span><?php echo app('translator')->get('app.blog'); ?></span>-->
    <!--                        </li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
    	<div class="main">
    <div class="custom-container">
        	<div class="listingbody">
			    		
				<div class="innerListingbody">
				    	<div class="innerheading violet" style="background: #EA1C57!important;">
						BLOGS
					</div>
					<div class="main" style="margin-top:-29px">
          
		<div class="custom-container">
<div style="margin-bottom:100px;width:100%">
<div class="tab-content responsive">
	<div class="tab-pane active" id="home" role="tabpanel">
		<div class="container-fluid">
			<div class="row mt-3">
     	<div class="col-12" style="padding: 0;">
         	<div class="headline_outter">
         	    <div class="row">
                     
                     <div class="col-md-12">

                          <!--<div class="col-md-10">-->
				<div style="width: 100%;">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <section class="post">
                        <div class="row">

                            <div itemscope itemtype="http://schema.org/NewsArticle">
                                <div class="col-md-3">
                                    <div class="image" style="height: 196px;">
                                        <a href="<?php echo e(route('blog_single', $post->slug)); ?>">
                                            <?php if($post->feature_img): ?>
                                                <img class="img-responsive" alt="<?php echo e($post->title); ?>" src="<?php echo e(media_url($post->feature_img)); ?>">
                                            <?php else: ?>
                                                <img class="img-responsive" alt="<?php echo e($post->title); ?>" src="<?php echo e(asset('uploads/placeholder.png')); ?>">
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7" style="margin-top: -24px;">
                                    <h3 itemprop="headline"><a href="<?php echo e(route('blog_single', $post->slug)); ?>" class="blog-title"><?php echo e($post->title); ?></a></h3>
                                    <div class="clearfix">
                                        <?php if($post->author): ?>
                                            <p class="author-category"  itemprop="author" itemscope itemtype="https://schema.org/Person">By <a href="<?php echo e(route('author_blog_posts', $post->author->id)); ?>"  itemprop="name"><?php echo e($post->author->name); ?></a></p>
                                        <?php endif; ?>
                                        <p class="date-comments">
                                            <i class="fa fa-calendar"></i> <?php echo e($post->created_at_datetime()); ?>

                                        </p>
                                    </div>
                                    <p class="intro" itemprop="description"> <?php echo e(str_limit(strip_tags($post->post_content), 250)); ?> </p>
                                    
                                    <p></p>
                                </div>
                                <div class="col-md-2">
                                 <a href="<?php echo e(route('blog_single', $post->slug)); ?>"><button  style="background:#1d1d53;color:white;padding: 6px;width:91%;
    border: #1d1d53;">READ MORE</button></a>
                                   	
                                    </div>

                                <meta itemprop="datePublished" content="<?php echo e($post->created_at->toW3cString()); ?>"/>
                            </div>
                        </div>
                    </section>
                      <hr style="color:pink">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!--</div>-->
                </div>
                
                </div>

            </div>
              
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    <div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', toastr_options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/blog.blade.php ENDPATH**/ ?>