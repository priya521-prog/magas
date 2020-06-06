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



                    <div class="col-sm-12">

                        <div class="form-group">
                            <label class="col-md-3 control-label"><?php echo app('translator')->get('app.enable_disable'); ?> </label>
                            <div class="col-md-6">
                                <label for="enable_slider" class="checkbox-inline">
                                    <input type="checkbox" value="1" id="enable_slider" name="enable_slider" <?php echo e(get_option('enable_slider') == 1 ? 'checked="checked"': ''); ?>>
                                    <?php echo app('translator')->get('app.enable_slider'); ?>
                                </label>
                            </div>

                            <div class="col-sm-3">
                                <a href="<?php echo e(route('create_slider')); ?>" class="btn btn-primary pull-right"><i class="fa fa-save"></i> <?php echo app('translator')->get('app.create_slider'); ?></a>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-12">
                        <div class="clearfix"></div>
                        <hr />

                    <?php if($sliders->count() > 0): ?>
                        <table class="table table-responsive table-bordered slideShow">
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td width="450">
                                        <img src="<?php echo e(slider_url($slider)); ?>" />
                                    </td>
                                    <td>
                                        <input type="text" placeholder="<?php echo app('translator')->get('app.caption'); ?>" name="slider_caption" data-id="<?php echo e($slider->id); ?>" class="form-control" value="<?php echo e($slider->caption); ?>" />
                                        <br />
                                        <a href="javascript:;" class="btn btn-danger btn-lg imgDeleteBtn" data-id="<?php echo e($slider->id); ?>"><i class="fa fa-trash"></i> </a>
                                    </td>
                                    <td>
                                        <input type="url" placeholder="url" name="slider_url" data-id="<?php echo e($slider->id); ?>" class="form-control" value="<?php echo e($slider->url); ?>" />
                                        <br />
                                        <!--<a href="javascript:;" class="btn btn-danger btn-lg imgDeleteBtn" data-id="<?php echo e($slider->id); ?>"><i class="fa fa-trash"></i> </a>-->
                                    </td>
                                    <td>
                                         
                                         <a class="btn theme-btn" style="background-color:#191a50;" href="<?php echo e(route('editslider', [$slider->id])); ?>">Edit </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    <?php endif; ?>

                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->
        </div>   <!-- /#wrapper -->

    </div> <!-- /#container -->
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script>
        $(document).ready(function() {
            $('body').on('click', '.imgDeleteBtn', function () {
                //Get confirm from user
                if (!confirm('<?php echo e(trans('app.are_you_sure')); ?>')) {
                    return '';
                }

                var current_selector = $(this);
                var img_id = $(this).data('id');

                $.ajax({
                    url: '<?php echo e(route('delete_slider')); ?>',
                    type: "POST",
                    data: {media_id: img_id, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        if (data.success == 1) {
                            current_selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });

            $('body').on('keyup change', 'input[name="slider_caption"]', function () {
                var caption = $(this).val();
                var slider_id = $(this).data('id');
                $.ajax({
                    url: '<?php echo e(route('update_slider_caption')); ?>',
                    type: "POST",
                    data: {media_id: slider_id, caption: caption, _token: '<?php echo e(csrf_token()); ?>'}
                });
            });

            $('body').on('keyup change', 'input[name="slider_url"]', function () {
             
                var url = $(this).val();
                   
                var slider_id = $(this).data('id');
              //  alert(slider_id);
                $.ajax({
                    url: '<?php echo e(route('update_slider_url')); ?>',
                    type: "POST",
                    data: {media_id: slider_id, url: url, _token: '<?php echo e(csrf_token()); ?>'}
                });
            });


            $('input[type="checkbox"], input[type="radio"]').click(function () {
                var input_name = $(this).attr('name');
                var input_value = 0;
                if ($(this).prop('checked')) {
                    input_value = $(this).val();
                }
                $.ajax({
                    url: '<?php echo e(route('save_settings')); ?>',
                    type: "POST",
                    data: {[input_name]: input_value, '_token': '<?php echo e(csrf_token()); ?>'}
                });
            });
        });


    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/sliders.blade.php ENDPATH**/ ?>