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

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <div class="col-xs-12">

                        <form action="" id="createPostForm" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>

                        <div class="form-group <?php echo e($errors->has('title')? 'has-error':''); ?>">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" value="<?php echo e(old('title')); ?>" name="title" placeholder="<?php echo app('translator')->get('app.title'); ?>">
                                <?php echo $errors->has('title')? '<p class="help-block">'.$errors->first('title').'</p>':''; ?>

                            </div>
                        </div>

                        <div class="form-group <?php echo e($errors->has('post_content')? 'has-error':''); ?>">
                            <div class="col-sm-12">
                                <textarea name="post_content" id="post_content" class="form-control" rows="6"><?php echo e(old('post_content')); ?></textarea>
                                <?php echo $errors->has('post_content')? '<p class="help-block">'.$errors->first('post_content').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group <?php echo e($errors->has('images')? 'has-error':''); ?>">
                            <div class="col-sm-12">

                                <div id="uploaded-ads-image-wrap">
                                    <?php if($ads_images->count() > 0): ?>
                                        <?php $__currentLoopData = $ads_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="creating-ads-img-wrap">
                                                <img src="<?php echo e(media_url($img, false)); ?>" class="img-responsive" />
                                                <div class="img-action-wrap" id="<?php echo e($img->id); ?>">
                                                    <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash-o"></i> </a>
                                                    <a href="javascript:;" class="imgFeatureBtn"><i class="fa fa-star<?php echo e($img->is_feature ==1 ? '':'-o'); ?>"></i> </a>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>


                                <div class="file-upload-wrap">
                                    <label>
                                        <input type="file" name="images" id="images" style="display: none;" />
                                        <i class="fa fa-cloud-upload"></i>
                                        <p><?php echo app('translator')->get('app.upload_image'); ?></p>
                                    </label>
                                </div>

                                <?php echo $errors->has('images')? '<p class="help-block">'.$errors->first('images').'</p>':''; ?>

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('app.create_new_post'); ?></button>
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
    <script src="<?php echo e(asset('assets/plugins/ckeditor/ckeditor.js')); ?>"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'post_content' );
    </script>

    <script>
        $(document).ready(function() {
            $("#images").change(function () {
                var fd = new FormData(document.querySelector("form#createPostForm"));
                $.ajax({
                    url: '<?php echo e(route('upload_post_image')); ?>',
                    type: "POST",
                    data: fd,
                    processData: false,  // tell jQuery not to process the data
                    contentType: false,   // tell jQuery not to set contentType
                    success: function (data) {
                        $('#loadingOverlay').hide('slow');
                        if (data.success == 1) {
                            $('#uploaded-ads-image-wrap').load('<?php echo e(route('append_post_media_image')); ?>');
                        } else {
                            toastr.error(data.msg, '<?php echo trans('app.error') ?>', toastr_options);
                        }
                    }
                });
            });

            $('body').on('click', '.imgDeleteBtn', function () {
                //Get confirm from user
                if (!confirm('<?php echo e(trans('app.are_you_sure')); ?>')) {
                    return '';
                }

                var current_selector = $(this);
                var img_id = $(this).closest('.img-action-wrap').attr('id');
                $.ajax({
                    url: '<?php echo e(route('delete_media')); ?>',
                    type: "POST",
                    data: {media_id: img_id, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        if (data.success == 1) {
                            current_selector.closest('.creating-ads-img-wrap').hide('slow');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });
        });
    </script>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/post_create.blade.php ENDPATH**/ ?>