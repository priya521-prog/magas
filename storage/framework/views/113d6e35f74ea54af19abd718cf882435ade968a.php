<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>


<?php $__env->startSection('social-meta'); ?>
    <meta property="og:title" content="<?php echo e($post->title); ?>">
    <meta property="og:description" content="<?php echo e(substr(trim(preg_replace('/\s\s+/', ' ',strip_tags($post->post_content) )),0,160)); ?>">
    <?php if($post->feature_img): ?>
        <meta property="og:image" content="<?php echo e(media_url($post->feature_img, true)); ?>">
    <?php else: ?>
        <meta property="og:image" content="<?php echo e(asset('uploads/placeholder.png')); ?>">
    <?php endif; ?>
    <meta property="og:url" content="<?php echo e(route('blog_single', $post->slug)); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <!--  Non-Essential, But Recommended -->
    <meta name="og:site_name" content="<?php echo e(get_option('site_name')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="jumbotron jumbotron-xs" style='margin-top:10%'>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="blog-post-title"><a href="<?php echo e(route('blog_single', $post->slug)); ?>" title="<?php echo e($title); ?>"><?php echo e($title); ?></a> </h2>
                </div>
                <div class="col-md-4">
                    <div class="blog-breadcrumb">
                        <ul class="breadcrumb">
                            <li> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.home'); ?></a> </li>
                            <li> <a href="<?php echo e(route('blog')); ?>"><?php echo app('translator')->get('app.blog'); ?></a> </li>
                            <!--<li> <span><?php echo e($post->title); ?></span> </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="blog-single" class="col-md-10 col-sm-12 col-md-offset-1">

                <section class="post post-<?php echo e($post->id); ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="clearfix">
                                <?php if($post->author): ?>
                                    <p class="author-category">By <a href="<?php echo e(route('author_blog_posts', $post->author->id)); ?>"><?php echo e($post->author->name); ?></a></p>
                                <?php endif; ?>
                                <p class="date-comments">
                                    <i class="fa fa-calendar"></i> <?php echo e($post->created_at_datetime()); ?>

                                </p>
                            </div>

                            <hr />

                            <?php if($post->feature_img): ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <img class="img-responsive" alt="<?php echo e($post->title); ?>" title="<?php echo e($post->title); ?>" src="<?php echo e(media_url($post->feature_img, true)); ?>" style="width: 100%">
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="post-content">
                                <?php echo $post->post_content; ?>

                            </div>
                        </div>
                    </div>
                </section>

                <?php if($enable_discuss): ?>
                    <div class="comments-title"><h2> <i class="fa fa-comment"></i> <?php echo app('translator')->get('app.comments'); ?></h2></div>

                    <div id="disqus_thread"></div>
                    <script>
                        var disqus_config = function () {
                            this.page.url = '<?php echo e(route('blog_single', $post->slug)); ?>';  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = '<?php echo e(route('blog_single', $post->slug)); ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = '//<?php echo e(get_option('disqus_shortname')); ?>.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                <?php endif; ?>

            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <?php if($enable_discuss): ?>
        <script id="dsq-count-scr" src="//tclassifieds.disqus.com/count.js" async></script>
    <?php endif; ?>
    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', toastr_options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/theme/blog_single.blade.php ENDPATH**/ ?>