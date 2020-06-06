<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>

    <div class="container" style='margin-top:10%'>

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

                <div class="row">
                    <div class="col-md-10 col-xs-12">

                        <form action="<?php echo e(route('save_settings')); ?>" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>


                        <div class="form-group <?php echo e($errors->has('site_name')? 'has-error':''); ?>">
                            <label for="site_name" class="col-sm-4 control-label"><?php echo app('translator')->get('app.site_name'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="site_name" value="<?php echo e(old('site_name')? old('site_name') : get_option('site_name')); ?>" name="site_name" placeholder="<?php echo app('translator')->get('app.site_name'); ?>">
                                <?php echo $errors->has('site_name')? '<p class="help-block">'.$errors->first('site_name').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('site_title')? 'has-error':''); ?>">
                            <label for="site_title" class="col-sm-4 control-label"><?php echo app('translator')->get('app.site_title'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="site_title" value="<?php echo e(old('site_title')? old('site_title') : get_option('site_title')); ?>" name="site_title" placeholder="<?php echo app('translator')->get('app.site_title'); ?>">
                                <?php echo $errors->has('site_title')? '<p class="help-block">'.$errors->first('site_title').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('email_address')? 'has-error':''); ?>">
                            <label for="email_address" class="col-sm-4 control-label"><?php echo app('translator')->get('app.email_address'); ?></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email_address" value="<?php echo e(old('email_address')? old('email_address') : get_option('email_address')); ?>" name="email_address" placeholder="<?php echo app('translator')->get('app.email_address'); ?>">
                                <?php echo $errors->has('email_address')? '<p class="help-block">'.$errors->first('email_address').'</p>':''; ?>

                                <p class="text-info"> <?php echo app('translator')->get('app.email_address_help_text'); ?></p>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="default_timezone" class="col-sm-4 control-label">
                                <?php echo app('translator')->get('app.default_timezone'); ?>
                            </label>
                            <div class="col-sm-8 <?php echo e($errors->has('default_timezone')? 'has-error':''); ?>">
                                <select class="form-control select2" name="default_timezone" id="default_timezone">
                                    <?php $saved_timezone = get_option('default_timezone'); ?>
                                    <?php $__currentLoopData = timezone_identifiers_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value); ?>" <?php echo e($saved_timezone == $value? 'selected':''); ?>><?php echo e($value); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>


                                <?php echo $errors->has('default_timezone')? '<p class="help-block">'.$errors->first('default_timezone').'</p>':''; ?>

                                <p class="text-info"><?php echo app('translator')->get('app.default_timezone_help_text'); ?></p>
                            </div>
                        </div>



                        <div class="form-group <?php echo e($errors->has('date_format')? 'has-error':''); ?>">
                            <label for="email_address" class="col-sm-4 control-label"><?php echo app('translator')->get('app.date_format'); ?></label>
                            <div class="col-sm-8">
                                <fieldset>
                                    <?php $saved_date_format = get_option('date_format'); ?>

                                    <label><input type="radio" value="F j, Y" name="date_format" <?php echo e($saved_date_format == 'F j, Y'? 'checked':''); ?>> <?php echo e(date('F j, Y')); ?><code>F j, Y</code></label> <br />
                                    <label><input type="radio" value="Y-m-d" name="date_format" <?php echo e($saved_date_format == 'Y-m-d'? 'checked':''); ?>> <?php echo e(date('Y-m-d')); ?><code>Y-m-d</code></label> <br />

                                    <label><input type="radio" value="m/d/Y" name="date_format" <?php echo e($saved_date_format == 'm/d/Y'? 'checked':''); ?>> <?php echo e(date('m/d/Y')); ?><code>m/d/Y</code></label> <br />

                                    <label><input type="radio" value="d/m/Y" name="date_format" <?php echo e($saved_date_format == 'd/m/Y'? 'checked':''); ?>> <?php echo e(date('d/m/Y')); ?><code>d/m/Y</code></label> <br />

                                    <label><input type="radio" value="custom" name="date_format" <?php echo e($saved_date_format == 'custom'? 'checked':''); ?>> Custom:</label>
                                    <input type="text" value="<?php echo e(get_option('date_format_custom')); ?>" id="date_format_custom" name="date_format_custom" />
                                    <span>example: <?php echo e(date(get_option('date_format_custom'))); ?></span>
                                </fieldset>
                                <p class="text-info"> <?php echo app('translator')->get('app.date_format_help_text'); ?></p>
                            </div>
                        </div>



                        <div class="form-group <?php echo e($errors->has('time_format')? 'has-error':''); ?>">
                            <label for="email_address" class="col-sm-4 control-label"><?php echo app('translator')->get('app.time_format'); ?></label>
                            <div class="col-sm-8">
                                <fieldset>
                                    <label><input type="radio" value="g:i a" name="time_format" <?php echo e(get_option('time_format') == 'g:i a'? 'checked':''); ?>> <?php echo e(date('g:i a')); ?><code>g:i a</code></label> <br />
                                    <label><input type="radio" value="g:i A" name="time_format" <?php echo e(get_option('time_format') == 'g:i A'? 'checked':''); ?>> <?php echo e(date('g:i A')); ?><code>g:i A</code></label> <br />

                                    <label><input type="radio" value="H:i" name="time_format" <?php echo e(get_option('time_format') == 'H:i'? 'checked':''); ?>> <?php echo e(date('H:i')); ?><code>H:i</code></label> <br />

                                    <label><input type="radio" value="custom" name="time_format" <?php echo e(get_option('time_format') == 'custom'? 'checked':''); ?>> Custom:</label>
                                    <input type="text" value="<?php echo e(get_option('time_format_custom')); ?>" id="time_format_custom" name="time_format_custom" />
                                    <span>example: <?php echo e(date(get_option('time_format_custom'))); ?></span>
                                </fieldset>
                                <p><a href="http://php.net/manual/en/function.date.php" target="_blank"><?php echo app('translator')->get('app.date_time_read_more'); ?></a> </p>
                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('currency_sign')? 'has-error':''); ?>">
                            <label for="currency_sign" class="col-sm-4 control-label"><?php echo app('translator')->get('app.currency_sign'); ?></label>
                            <div class="col-sm-8">
                                


                                <?php $current_currency = get_option('currency_sign'); ?>
                                <select name="currency_sign" class="form-control select2">
                                    <?php $__currentLoopData = themeqx_classifieds_currencies(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($code); ?>"  <?php echo e($current_currency == $code? 'selected':''); ?>> <?php echo e($code); ?> </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>


                            </div>
                        </div>


                        <div class="form-group <?php echo e($errors->has('logo_settings')? 'has-error':''); ?>">
                            <label for="email_address" class="col-sm-4 control-label"><?php echo app('translator')->get('app.logo_settings'); ?></label>
                            <div class="col-sm-8">
                                <fieldset>
                                    <label><input type="radio" value="show_site_name" name="logo_settings" <?php echo e(get_option('logo_settings') == 'show_site_name'? 'checked':''); ?>> <?php echo app('translator')->get('app.show_site_name'); ?> </label> <br />
                                    <label><input type="radio" value="show_image" name="logo_settings" <?php echo e(get_option('logo_settings') == 'show_image'? 'checked':''); ?>> <?php echo app('translator')->get('app.show_image'); ?> </label> <br />
                                </fieldset>
                            </div>
                        </div>


                        <div class="form-group <?php echo e($errors->has('verification_email_after_registration')? 'has-error':''); ?>">
                            <label for="email_address" class="col-sm-4 control-label"><?php echo app('translator')->get('app.verification_email_after_registration'); ?></label>
                            <div class="col-sm-8">
                                <fieldset>
                                    <label><input type="radio" value="1" name="verification_email_after_registration" <?php echo e(get_option('verification_email_after_registration') == '1'? 'checked':''); ?>> <?php echo app('translator')->get('app.yes'); ?> </label> <br />
                                    <label><input type="radio" value="0" name="verification_email_after_registration" <?php echo e(get_option('verification_email_after_registration') == '0'? 'checked':''); ?>> <?php echo app('translator')->get('app.no'); ?> </label> <br />
                                </fieldset>
                            </div>
                        </div>

                        <hr />
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" id="settings_save_btn" class="btn btn-primary"><?php echo app('translator')->get('app.save_settings'); ?></button>
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


            $('input[name="date_format"]').click(function(){
                $('#date_format_custom').val($(this).val());
            });
            $('input[name="time_format"]').click(function(){
                $('#time_format_custom').val($(this).val());
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

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/general_settings.blade.php ENDPATH**/ ?>