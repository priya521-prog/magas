<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
    <div class="container" style='margin-top:10%'>
        <div id="wrapper">
            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="color:black"> <?php echo e($title); ?>  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <div class="col-xs-12">
<br><br>
                        <form action="<?php echo e(route('post_logo')); ?>" id="createPostForm" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>

                       
                         <div class="custom-file-upload input-row">
                                                        Image: <input type="file" id="filescustommedia" value="logo" name="filescustommedia" required/><br/><br/>

                                                        <div class="clearfix"></div>
                                                    </div>

                       <div class="input-row">
                                                        <div class="select">
                                                          <select class="form-control select2" name="ref" style="width:50%" required>
                                    <option value="">Select Ref</option>
                                   
                                        <option value="clients">Clients</option>
                                         <option value="partners">Partners</option>
                                   
                                </select>
                                                        </div>
                                <!--<?php echo $errors->has('servicetype')? '<p class="help-block"style="color:red;">Please Select the Service type.</p>':''; ?>-->
                        <!--                            </div>-->
                        <!--<div class="custom-file-upload input-row">-->
                                                      
                        <!--                            </div>-->
                       


                        <div class="form-group">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">Submit Logo</button></button>
                            </div>
                        </div>
                        </form>

                    </div>

                </div>
<div class="row">
    
     <div class="col-md-12">
                                                  <?php
                                                
                                                // foreach($clients as $client){
                                                   
                                                    // echo "<img src='../uploads/logos/.$partner->media_name;'>";
                                                ?>
                                              
                                              
                                              <!--  <img src="<?php //echo '.../uploads/logos/'.$client->media_name;?>" width="150px" height:"100px" hspace="20"/> -->

                                               
                                                <?php
                                            //   }
                                                ?>
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

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/add_logo.blade.php ENDPATH**/ ?>