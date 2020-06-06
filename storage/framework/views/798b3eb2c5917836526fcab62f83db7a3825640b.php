<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

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
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                        <form action="" class="form-horizontal" method="post"> <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="country_id" class="col-sm-4 control-label"><?php echo app('translator')->get('app.select_a_category'); ?></label>

                            <div class="col-sm-8 <?php echo e($errors->has('country_id')? 'has-error':''); ?>">
                                <select class="form-control select2" name="country_id">
                                    <option value=""><?php echo app('translator')->get('app.select_country'); ?></option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>" <?php echo e($country->id == $state->country_id ? 'selected':''); ?> ><?php echo e($country->country_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php echo $errors->has('country_id')? '<p class="help-block">'.$errors->first('country_id').'</p>':''; ?>


                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('state_name')? 'has-error':''); ?>">
                            <label for="state_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.state_name'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="state_name" value="<?php echo e(old('state_name') ? old('state_name'): $state->state_name); ?>" name="state_name" placeholder="<?php echo app('translator')->get('app.state_name'); ?>">
                                <?php echo $errors->has('state_name')? '<p class="help-block">'.$errors->first('state_name').'</p>':''; ?>


                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.edit_state'); ?></button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>


            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/state_edit.blade.php ENDPATH**/ ?>