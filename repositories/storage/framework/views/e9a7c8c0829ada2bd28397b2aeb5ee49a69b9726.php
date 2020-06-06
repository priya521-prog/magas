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

                <form action="<?php echo e(route('save_settings')); ?>" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>

                <div class="form-group <?php echo e($errors->has('enable_paypal')? 'has-error':''); ?>">
                    <label class="col-md-4 control-label"><?php echo app('translator')->get('app.enable_disable'); ?> </label>
                    <div class="col-md-8">
                        <label for="enable_paypal" class="checkbox-inline">
                            <input type="checkbox" value="1" id="enable_paypal" name="enable_paypal" <?php echo e(get_option('enable_paypal') == 1 ? 'checked="checked"': ''); ?>>
                            <?php echo app('translator')->get('app.enable_paypal'); ?>
                        </label>

                        <?php echo $errors->has('type')? '<p class="help-block">'.$errors->first('type').'</p>':''; ?>

                    </div>
                </div>


                <div class="form-group <?php echo e($errors->has('enable_stripe')? 'has-error':''); ?>">
                    <label class="col-md-4 control-label"><?php echo app('translator')->get('app.enable_disable'); ?> </label>
                    <div class="col-md-8">
                        <label for="enable_stripe" class="checkbox-inline">
                            <input type="checkbox" value="1" id="enable_stripe" name="enable_stripe" <?php echo e(get_option('enable_stripe') == 1 ? 'checked="checked"': ''); ?>>
                            <?php echo app('translator')->get('app.enable_stripe'); ?>
                        </label>

                        <?php echo $errors->has('type')? '<p class="help-block">'.$errors->first('type').'</p>':''; ?>

                    </div>
                </div>




                    <div id="paypal_settings_wrap" style="display: <?php echo e(get_option('enable_paypal') == 1 ? 'block' : 'none'); ?>">
                        <hr />

                        <legend><?php echo app('translator')->get('app.paypal_settings'); ?></legend>
                        <div class="form-group <?php echo e($errors->has('enable_paypal_sandbox')? 'has-error':''); ?>">
                            <label class="col-md-4 control-label"><?php echo app('translator')->get('app.enable_paypal_sandbox'); ?> </label>
                            <div class="col-md-8">
                                <label for="enable_paypal_sandbox" class="checkbox-inline">
                                    <input type="checkbox" value="1" id="enable_paypal_sandbox" name="enable_paypal_sandbox" <?php echo e(get_option('enable_paypal_sandbox') == 1 ? 'checked="checked"': ''); ?>>
                                    <?php echo app('translator')->get('app.enable_paypal_sandbox'); ?>
                                </label>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('paypal_receiver_email')? 'has-error':''); ?>">
                            <label for="paypal_receiver_email" class="col-sm-4 control-label"><?php echo app('translator')->get('app.paypal_receiver_email'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="paypal_receiver_email" value="<?php echo e(old('paypal_receiver_email')? old('paypal_receiver_email') : get_option('paypal_receiver_email')); ?>" name="paypal_receiver_email" placeholder="<?php echo app('translator')->get('app.test_secret_key'); ?>">
                                <?php echo $errors->has('paypal_receiver_email')? '<p class="help-block">'.$errors->first('paypal_receiver_email').'</p>':''; ?>

                                <p class="text-info"><?php echo app('translator')->get('app.paypal_receiver_email_help_text'); ?></p>
                            </div>
                        </div>





                    </div>





                    <div id="stripe_settings_wrap" style="display: <?php echo e(get_option('enable_stripe') == 1 ? 'block' : 'none'); ?>">
                        <hr />

                        <legend><?php echo app('translator')->get('app.stripe_settings'); ?></legend>
                        <div class="form-group <?php echo e($errors->has('stripe_test_mode')? 'has-error':''); ?>">
                            <label class="col-md-4 control-label"><?php echo app('translator')->get('app.test_mode'); ?> </label>
                            <div class="col-md-8">
                                <label for="stripe_test_mode" class="checkbox-inline">
                                    <input type="checkbox" value="1" id="stripe_test_mode" name="stripe_test_mode" <?php echo e(get_option('stripe_test_mode') == 1 ? 'checked="checked"': ''); ?>>
                                    <?php echo app('translator')->get('app.enable_test_mode'); ?>
                                </label>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('stripe_test_secret_key')? 'has-error':''); ?>">
                            <label for="stripe_test_secret_key" class="col-sm-4 control-label"><?php echo app('translator')->get('app.test_secret_key'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="stripe_test_secret_key" value="<?php echo e(old('stripe_test_secret_key')? old('stripe_test_secret_key') : get_option('stripe_test_secret_key')); ?>" name="stripe_test_secret_key" placeholder="<?php echo app('translator')->get('app.test_secret_key'); ?>">
                                <?php echo $errors->has('stripe_test_secret_key')? '<p class="help-block">'.$errors->first('stripe_test_secret_key').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('stripe_test_publishable_key')? 'has-error':''); ?>">
                            <label for="stripe_test_publishable_key" class="col-sm-4 control-label"><?php echo app('translator')->get('app.test_publishable_key'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="stripe_test_publishable_key" value="<?php echo e(old('stripe_test_publishable_key')? old('stripe_test_publishable_key') : get_option('stripe_test_publishable_key')); ?>" name="stripe_test_publishable_key" placeholder="<?php echo app('translator')->get('app.test_publishable_key'); ?>">
                                <?php echo $errors->has('stripe_test_publishable_key')? '<p class="help-block">'.$errors->first('stripe_test_publishable_key').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('stripe_live_secret_key')? 'has-error':''); ?>">
                            <label for="stripe_live_secret_key" class="col-sm-4 control-label"><?php echo app('translator')->get('app.live_secret_key'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="stripe_live_secret_key" value="<?php echo e(old('stripe_live_secret_key')? old('stripe_live_secret_key') : get_option('stripe_live_secret_key')); ?>" name="stripe_live_secret_key" placeholder="<?php echo app('translator')->get('app.live_secret_key'); ?>">
                                <?php echo $errors->has('stripe_live_secret_key')? '<p class="help-block">'.$errors->first('stripe_live_secret_key').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('stripe_live_publishable_key')? 'has-error':''); ?>">
                            <label for="stripe_live_publishable_key" class="col-sm-4 control-label"><?php echo app('translator')->get('app.live_publishable_key'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="stripe_live_publishable_key" value="<?php echo e(old('stripe_live_publishable_key')? old('stripe_live_publishable_key') : get_option('stripe_live_publishable_key')); ?>" name="stripe_live_publishable_key" placeholder="<?php echo app('translator')->get('app.live_publishable_key'); ?>">
                                <?php echo $errors->has('stripe_live_publishable_key')? '<p class="help-block">'.$errors->first('stripe_live_publishable_key').'</p>':''; ?>

                            </div>
                        </div>


                    </div>


                <hr />

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" id="settings_save_btn" class="btn btn-primary"><?php echo app('translator')->get('app.save_settings'); ?></button>
                    </div>
                </div>

                </form>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-js'); ?>
    <script>
        $(document).ready(function(){

            $('input[type="checkbox"], input[type="radio"]').click(function(){
                var input_name = $(this).attr('name');
                var input_value = 0;
                if ($(this).prop('checked')){
                    input_value = $(this).val();
                }
                $.ajax({
                    url : '<?php echo e(route('save_settings')); ?>',
                    type: "POST",
                    data: { [input_name]: input_value, '_token': '<?php echo e(csrf_token()); ?>' },
                });
            });

            /**
             * show or hide stripe and paypal settings wrap
             */
            $('#enable_paypal').click(function(){
                if ($(this).prop('checked')){
                    $('#paypal_settings_wrap').slideDown();
                }else{
                    $('#paypal_settings_wrap').slideUp();
                }
            });
            $('#enable_stripe').click(function(){
                if ($(this).prop('checked')){
                    $('#stripe_settings_wrap').slideDown();
                }else{
                    $('#stripe_settings_wrap').slideUp();
                }
            });



            /**
             * Send settings option value to server
             */
            $('#settings_save_btn').click(function(e){
                e.preventDefault();

                var this_btn = $(this);
                this_btn.attr('disabled', 'disabled');

                var form_data = this_btn.closest('form').serialize();
                $.ajax({
                    url : '<?php echo e(route('save_settings')); ?>',
                    type: "POST",
                    data: form_data,
                    success : function (data) {
                        if (data.success == 1){
                            this_btn.removeAttr('disabled');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/payment_settings.blade.php ENDPATH**/ ?>