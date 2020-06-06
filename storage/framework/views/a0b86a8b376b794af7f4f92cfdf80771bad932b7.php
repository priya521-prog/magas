<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="container" style='margin-top:10%'>
        <div id="wrapper">

            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"> <?php echo e($title); ?>  <a href="<?php echo e(route('add_administrator')); ?>" class="btn btn-info pull-right"><i class="fa fa-user-plus"></i> <?php echo e(trans('app.add_administrator')); ?></a> </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <div class="col-xs-12">

                        <form action="" role="form" method="post"> <?php echo csrf_field(); ?>

                            <hr />
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group <?php echo e($errors->has('first_name')? 'has-error':''); ?> ">
                                        <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo e(old('first_name')); ?>" placeholder="First Name" tabindex="1">

                                        <?php echo $errors->has('first_name')? '<p class="help-block">'.$errors->first('first_name').'</p>':''; ?>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group <?php echo e($errors->has('last_name')? 'has-error':''); ?> ">
                                        <input type="text" name="last_name" id="last_name" class="form-control"  value="<?php echo e(old('last_name')); ?>" placeholder="Last Name" tabindex="2">
                                        <?php echo $errors->has('last_name')? '<p class="help-block">'.$errors->first('last_name').'</p>':''; ?>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group <?php echo e($errors->has('email')? 'has-error':''); ?> ">
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="Email Address" tabindex="4">
                                <?php echo $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':''; ?>


                            </div>

                            <div class="form-group <?php echo e($errors->has('phone')? 'has-error':''); ?>">
                                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo e(old('phone')); ?>" placeholder="Phone Number" tabindex="3">
                                <?php echo $errors->has('phone')? '<p class="help-block">'.$errors->first('phone').'</p>':''; ?>

                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group <?php echo e($errors->has('gender')? 'has-error':''); ?>">
                                        <select id="gender" name="gender" class="form-control select2">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Fe-Male</option>
                                            <option value="third_gender">Third Gender</option>
                                        </select>
                                        <?php echo $errors->has('gender')? '<p class="help-block">'.$errors->first('gender').'</p>':''; ?>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group <?php echo e($errors->has('country')? 'has-error':''); ?>">
                                        <select id="country" name="country" class="form-control select2">
                                            <option value=""><?php echo app('translator')->get('app.select_a_country'); ?></option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>" <?php echo e(old('country') == $country->id ? 'selected' :''); ?>><?php echo e($country->country_name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php echo $errors->has('country')? '<p class="help-block">'.$errors->first('country').'</p>':''; ?>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group <?php echo e($errors->has('password')? 'has-error':''); ?>">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" tabindex="5">
                                        <?php echo $errors->has('password')? '<p class="help-block">'.$errors->first('password').'</p>':''; ?>


                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group <?php echo e($errors->has('password_confirmation')? 'has-error':''); ?>">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" tabindex="6">
                                        <?php echo $errors->has('password_confirmation')? '<p class="help-block">'.$errors->first('password_confirmation').'</p>':''; ?>


                                    </div>
                                </div>
                            </div>


                            <hr />
                            <div class="row">
                                <div class="col-xs-12"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->

    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/add_administrator.blade.php ENDPATH**/ ?>