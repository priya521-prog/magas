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

                        <form action="" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>
                        <div class="form-group <?php echo e($errors->has('name')? 'has-error':''); ?>">
                            <label for="name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.name'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" value="<?php echo e(old('name')? old('name') : $user->name); ?>" name="name" placeholder="<?php echo app('translator')->get('app.name'); ?>">
                                <?php echo $errors->has('name')? '<p class="help-block">'.$errors->first('name').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('email')? 'has-error':''); ?>">
                            <label for="email" class="col-sm-4 control-label"><?php echo app('translator')->get('app.email'); ?></label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" value="<?php echo e(old('email')? old('email') : $user->email); ?>" name="email" placeholder="<?php echo app('translator')->get('app.email'); ?>">
                                <?php echo $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('gender')? 'has-error':''); ?>">
                            <label for="gender" class="col-sm-4 control-label"><?php echo app('translator')->get('app.gender'); ?></label>
                            <div class="col-sm-8">
                                <select id="gender" name="gender" class="form-control select2">
                                    <option value="">Select Gender</option>
                                    <option value="male" <?php echo e($user->gender == 'male'?'selected':''); ?>>Male</option>
                                    <option value="female" <?php echo e($user->gender == 'female'?'selected':''); ?>>Fe-Male</option>
                                    <option value="third_gender" <?php echo e($user->gender == 'third_gender'?'selected':''); ?>>Third Gender</option>
                                </select>

                                <?php echo $errors->has('gender')? '<p class="help-block">'.$errors->first('gender').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('mobile')? 'has-error':''); ?>">
                            <label for="mobile" class="col-sm-4 control-label"><?php echo app('translator')->get('app.mobile'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="mobile" value="<?php echo e(old('mobile')? old('mobile') : $user->mobile); ?>" name="mobile" placeholder="<?php echo app('translator')->get('app.mobile'); ?>">
                                <?php echo $errors->has('mobile')? '<p class="help-block">'.$errors->first('mobile').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('phone')? 'has-error':''); ?>">
                            <label for="phone" class="col-sm-4 control-label"><?php echo app('translator')->get('app.phone'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="phone" value="<?php echo e(old('phone')? old('phone') : $user->phone); ?>" name="phone" placeholder="<?php echo app('translator')->get('app.phone'); ?>">
                                <?php echo $errors->has('phone')? '<p class="help-block">'.$errors->first('phone').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group <?php echo e($errors->has('country_id')? 'has-error':''); ?>">
                            <label for="phone" class="col-sm-4 control-label"><?php echo app('translator')->get('app.country'); ?></label>
                            <div class="col-sm-8">
                                <select id="country_id" name="country_id" class="form-control select2">
                                    <option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->id); ?>" <?php echo e($user->country_id == $country->id ? 'selected' :''); ?>><?php echo e($country->country_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php echo $errors->has('country_id')? '<p class="help-block">'.$errors->first('country_id').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group <?php echo e($errors->has('address')? 'has-error':''); ?>">
                            <label for="address" class="col-sm-4 control-label"><?php echo app('translator')->get('app.address'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" value="<?php echo e(old('address')? old('address') : $user->address); ?>" name="address" placeholder="<?php echo app('translator')->get('app.address'); ?>">
                                <?php echo $errors->has('address')? '<p class="help-block">'.$errors->first('address').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('website')? 'has-error':''); ?>">
                            <label for="website" class="col-sm-4 control-label"><?php echo app('translator')->get('app.website'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="website" value="<?php echo e(old('website')? old('website') : $user->website); ?>" name="website" placeholder="<?php echo app('translator')->get('app.website'); ?>">
                                <?php echo $errors->has('website')? '<p class="help-block">'.$errors->first('website').'</p>':''; ?>

                            </div>
                        </div>
                        <!-- <div class="form-group">-->
                        <!--    <label for="Affiliate" class="col-sm-4 control-label">Affiliate Code</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <input type="text" class="form-control" id="affiliate_code" value="<?php echo e(old('affiliate_code')? old('affiliate_code') : $user->affiliate_code); ?>" name="affiliate_code" placeholder="Enter affiliate code to upgrade profile to premium">-->
                                <!--<?php echo $errors->has('affiliate_code')? '<p class="help-block">'.$errors->first('affiliate_code').'</p>':''; ?>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--    <label for="account_type" class="col-sm-4 control-label">Account Type</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <select id="account_type" name="account_type" class="form-control select2">-->
                        <!--            <option value="">Select Account Type</option>-->
                        <!--            <option value="standardaccess" <?php echo e($user->account_type == 'standardaccess'?'selected':''); ?>>standardaccess</option>-->
                        <!--            <option value="premiumplan" <?php echo e($user->account_type == 'premiumplan'?'selected':''); ?>>premiumplan</option>-->
                                   
                        <!--        </select>-->

                              
                        <!--    </div>-->
                        <!--</div>-->
                        <!--  <div class="form-group">-->
                        <!--    <label for="Affiliate" class="col-sm-4 control-label">Account Type</label>-->
                        <!--    <div class="col-sm-8">-->
                        <!--        <input type="text" class="form-control" id="account_type" value="<?php echo e(old('affiliate_code')? old('affiliate_code') : $user->affiliate_code); ?>" name="account_type">-->
                                <!--<?php echo $errors->has('affiliate_code')? '<p class="help-block">'.$errors->first('affiliate_code').'</p>':''; ?>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="form-group  <?php echo e($errors->has('photo')? 'has-error':''); ?>">
                            <label class="col-sm-4 control-label"><?php echo app('translator')->get('app.change_avatar'); ?></label>
                            <div class="col-sm-8">
                                <input type="file" id="photo" name="photo" class="filestyle" >
                                <?php echo $errors->has('photo')? '<p class="help-block">'.$errors->first('photo').'</p>':''; ?>

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
</div> 
</div> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script src="<?php echo e(asset('assets/js/bootstrap-filestyle.min.js')); ?>"></script>
    <script>
        $(":file").filestyle({buttonName: "btn-primary", buttonBefore: true});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/profile_edit.blade.php ENDPATH**/ ?>