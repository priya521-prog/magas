<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('page-css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/croppic/croppic.css')); ?>"/>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>


    <div class="main"><div class="custom-container"><div class="listingbody">

        <div id="wrapper">
            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> <?php echo e($title); ?>  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="cropContainerEyecandy"></div>
                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->

    </div> <!-- /#container -->
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script src="<?php echo e(asset('assets/plugins/croppic/croppic.min.js')); ?>"></script>
    <script>
        var eyeCandy = $('#cropContainerEyecandy');
        var croppedOptions = {
            uploadUrl: '<?php echo e(route('create_slider')); ?>',
            cropUrl: '<?php echo e(route('create_crop')); ?>',
            loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
            onAfterImgCrop:		function(){ location.href = '<?php echo e(route('slider')); ?>' },
            cropData:{
                'width' : (eyeCandy.width() * 2),
                'height': eyeCandy.height() * 2
            }
        };
        var cropperBox = new Croppic('cropContainerEyecandy', croppedOptions);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/sliders_create.blade.php ENDPATH**/ ?>