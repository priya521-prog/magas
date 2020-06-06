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
                    <div class="col-md-10 col-xs-12">

                        <form action="<?php echo e(route('save_settings')); ?>" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>

                            <div class="form-group <?php echo e($errors->has('countries_usage')? 'has-error':''); ?>">
                                <label for="email_address" class="col-sm-4 control-label"><?php echo app('translator')->get('app.countries_usage'); ?></label>
                                <div class="col-sm-8">
                                    <fieldset>
                                        <label><input type="radio" value="all_countries" name="countries_usage" <?php echo e(get_option('countries_usage') == 'all_countries'? 'checked':''); ?>> <?php echo app('translator')->get('app.all_countries'); ?> </label> <br />
                                        <label><input type="radio" value="single_country" name="countries_usage" <?php echo e(get_option('countries_usage') == 'single_country'? 'checked':''); ?>> <?php echo app('translator')->get('app.single_country'); ?> </label> <br />
                                    </fieldset>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="usage_single_country_id" class="col-sm-4 control-label">
                                    <?php echo app('translator')->get('app.select_specific_country'); ?>
                                </label>
                                <div class="col-sm-8 <?php echo e($errors->has('usage_single_country_id')? 'has-error':''); ?>">
                                    <select class="form-control select2" name="usage_single_country_id" id="usage_single_country_id">
                                        <?php $saved_single_country_id = get_option('usage_single_country_id'); ?>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country->id); ?>" <?php echo e($saved_single_country_id == $country->id? 'selected':''); ?>><?php echo e($country->country_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>

                                    <p class="text-info"><?php echo app('translator')->get('app.usage_single_country_id_help_text'); ?></p>
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

                <hr />

                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th><?php echo app('translator')->get('app.country_name'); ?></th>
                                <th><?php echo app('translator')->get('app.country_code'); ?></th>
                            </tr>

                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($country->country_name); ?></td>
                                    <td><?php echo e($country->country_code); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </thead>
                        </table>

                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>
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

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/countries.blade.php ENDPATH**/ ?>