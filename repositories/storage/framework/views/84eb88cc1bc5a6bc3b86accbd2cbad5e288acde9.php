<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    
   <div class="main" ><div class="custom-container"><div class="listingbody">
      
       <div class="jumbotron jumbotron-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h2><?php echo e($page->title); ?></h2>
                </div>
            </div>
        </div>
    </div>

<div class="row">
                                    <div class="col-md-12">
                                        <img class="img-responsive" alt="<?php echo e($page->title); ?>" title="<?php echo e($page->title); ?>" src="<?php echo e(media_url($page->feature_img, true)); ?>" style="width: 100%">
                                    </div>
                                </div>


        <div class="row">
            <div class="col-md-12">
                <div class="page_wrapper page-<?php echo e($page->id); ?>">
                    <?php echo $page->post_content; ?>


                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo trans('app.success') ?>', toastr_options);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/theme/single_page.blade.php ENDPATH**/ ?>