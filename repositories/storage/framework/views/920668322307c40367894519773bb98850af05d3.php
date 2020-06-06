<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="container">

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
                    <div class="col-xs-12">

                        <form action="" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>

                            <div class="form-group  <?php echo e($errors->has('logo')? 'has-error':''); ?>">
                                <label class="col-sm-4 control-label"><?php echo app('translator')->get('app.site_logo'); ?></label>
                                <div class="col-sm-8">

                                    <?php if(logo_url()): ?>
                                        <img src="<?php echo e(logo_url()); ?>" />
                                    <?php endif; ?>


                                    <input type="file" id="logo" name="logo" class="filestyle" >
                                    <?php echo $errors->has('logo')? '<p class="help-block">'.$errors->first('logo').'</p>':''; ?>

                                </div>
                            </div>


                            <hr />

                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.edit'); ?></button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/other_settings.blade.php ENDPATH**/ ?>