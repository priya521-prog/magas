<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white error-404-wrap">
                    <h1>
                        Oops!</h1>
                    <h2>
                        404 Not Found</h2>
                    <div class="error-details" stylle="height:400px;" style="height: 400px;margin-top: 110px;font-size: 30px;">
                        Sorry, an error has occured, Requested page not found!
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/theme/error_404.blade.php ENDPATH**/ ?>