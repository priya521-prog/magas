<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

     <div class="main" ><div class="custom-container"><div class="listingbody">

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

                        <form action="<?php echo e(route('premium_save')); ?>" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>
                      
                       
                      

                         <div class="form-group">
                            <label for="Affiliate" class="col-sm-4 control-label">Update Affiliate Code</label>
                            <div class="col-sm-8">
                                <select id="utilized_code" name="utilized_code" class="form-control select2">
                                    <option value="">Select Code</option>
                                    <?php $__currentLoopData = $aff_code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($code->affiliate_code); ?>"><?php echo e($code->affiliate_code); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              
                            </div>
                        </div>
                        

                        <!--<div class="form-group <?php echo e($errors->has('address')? 'has-error':''); ?>">-->
                        <!--    <label for="address" class="col-sm-4 control-label">Update Address</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <input type="text" class="form-control" id="address" required value="<?php echo e(old('address')? old('address') : $user->address); ?>" name="address" placeholder="<?php echo app('translator')->get('app.address'); ?>">-->
                        <!--        <?php echo $errors->has('address')? '<p class="help-block">'.$errors->first('address').'</p>':''; ?>-->
                        <!--    </div>-->
                        <!--</div>-->

                      

                         
                        <div class="form-group">
                              <input name="account_type" type="hidden"  value="premiumplan"/>
                          
                        </div>
                       

                        <hr />

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                        </form>

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div> 
</div> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script src="<?php echo e(asset('assets/js/bootstrap-filestyle.min.js')); ?>"></script>
    <script>
        $(":file").filestyle({buttonName: "btn-primary", buttonBefore: true});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/premium_update.blade.php ENDPATH**/ ?>