<?php $__env->startSection('title'); ?> Log-In | ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

	<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">

                <div class="login">
                    <h3 class="authTitle">Login or <a href="<?php echo e(route('user.create')); ?>" class="btn btn-xl btn-default">Sign up</a></h3>

                    <?php if(session('registration_success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('registration_success')); ?>

                        </div>
                    <?php endif; ?>

                    <?php if(get_option('enable_social_login') == 1): ?>

                        <div class="row row-sm-offset-3 socialButtons">

                            <?php if(get_option('enable_facebook_login') == 1): ?>
                                <div class="col-xs-6">
                                    <a href="<?php echo e(route('facebook_redirect')); ?>" class="btn btn-lg btn-block btn-facebook">
                                        <i class="fa fa-facebook visible-xs"></i>
                                        <span class="hidden-xs"><i class="fa fa-facebook-square"></i> Facebook</span>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <?php if(get_option('enable_google_login') == 1): ?>
                                <div class="col-xs-6">
                                    <a href="<?php echo e(route('google_redirect')); ?>" class="btn btn-lg btn-block btn-google">
                                        <i class="fa fa-google-plus visible-xs"></i>
                                        <span class="hidden-xs"><i class="fa fa-google-plus-square"></i> Google+</span>
                                    </a>
                                </div>
                            <?php endif; ?>

                        </div>

                        <div class="row row-sm-offset-3 loginOr">
                            <div class="col-xs-12">
                                <hr class="hrOr">
                                <span class="spanOr">or</span>
                            </div>
                        </div>

                    <?php endif; ?>

                    <div class="row row-sm-offset-3">
                        <div class="col-xs-12">
                            <form action="" class="loginForm" autocomplete="off" method="post"> <?php echo csrf_field(); ?>

                                <div class="input-group <?php echo e($errors->has('email')? 'has-error':''); ?>">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="email address">

                                </div>
                                <?php echo $errors->has('email')? '<p class="help-block">'.$errors->first('email').'</p>':''; ?>

                                <span class="help-block"></span>

                                <div class="input-group <?php echo e($errors->has('password')? 'has-error':''); ?>">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <?php echo $errors->has('password')? '<p class="help-block">'.$errors->first('password').'</p>':''; ?>


                                <span class="help-block"></span>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="row row-sm-offset-3">
                        <div class="col-xs-12">
                            <div class="col-xs-12 col-sm-6">
                                <label class="checkbox">
                                    <input type="checkbox" value="remember-me">Remember Me
                                </label>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <p class="forgotPassword">
                                    
                                    <a href="password/reset"> <?php echo app('translator')->get('app.forgot_password'); ?></a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="forgotPasswordEmail" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="<?php echo e(route('send_reset_link')); ?>" method="post"> <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><?php echo app('translator')->get('app.enter_email_to_reset_password'); ?></h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="email" class="control-label"><?php echo app('translator')->get('app.email'); ?>:</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <div id="email_info"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo app('translator')->get('app.close'); ?></button>
                        <button type="submit" class="btn btn-primary" id="send_reset_link"><?php echo app('translator')->get('app.send_reset_link'); ?></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
 </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>
        var options = {closeButton : true};
        <?php if(session('error')): ?>
        toastr.error('<?php echo e(session('error')); ?>', 'Error!', options)
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\magas_services\resources\views/theme/login.blade.php ENDPATH**/ ?>