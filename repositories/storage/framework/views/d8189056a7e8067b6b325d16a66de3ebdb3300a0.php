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
                    <div class="col-xs-12">
                        <?php if($ads->total() > 0): ?>
                            <table class="table table-bordered table-striped table-responsive">

                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td width="100">
                                            <img src="<?php echo e(media_url($ad->feature_img)); ?>" class="thumb-listing-table" alt="">
                                        </td>
                                        <td>
                                            -<h5><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" target="_blank"><?php echo e($ad->title); ?></a> (<?php echo $ad->status_context(); ?>)</h5>
                                            <p class="text-muted">
                                                <i class="fa fa-map-marker"></i> <?php echo $ad->full_address(); ?> <br />  <i class="fa fa-clock-o"></i> <?php echo e($ad->posting_datetime()); ?>

                                            </p>
                                            <br> <?php echo e($ad->type); ?>

                                        </td>
<td><?php //echo $ad->id; ?></td>
                                        <td>
                                            <!--<a href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-edit"></i> </a>-->
                                            <a href="javascript:;" class="btn btn-danger deleteAds" data-slug="<?php echo e($ad->slug); ?>"><i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </table>
                        <?php endif; ?>

                        <?php echo $ads->links(); ?>


                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

    <script>
        $(document).ready(function() {
            $('.deleteAds').on('click', function () {
                if (!confirm('<?php echo e(trans('app.are_you_sure')); ?>')) {
                    return '';
                }
                var selector = $(this);
                var slug = selector.data('slug');
                $.ajax({
                    url: '<?php echo e(route('delete_ads')); ?>',
                    type: "POST",
                    data: {slug: slug, _token: '<?php echo e(csrf_token()); ?>'},
                    success: function (data) {
                        if (data.success == 1) {
                            selector.closest('tr').hide('slow');
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });
        });
    </script>

    <script>
        <?php if(session('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', '<?php echo e(trans('app.success')); ?>', toastr_options);
        <?php endif; ?>
        <?php if(session('error')): ?>
            toastr.error('<?php echo e(session('error')); ?>', '<?php echo e(trans('app.success')); ?>', toastr_options);
        <?php endif; ?>
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/user_approvedads.blade.php ENDPATH**/ ?>