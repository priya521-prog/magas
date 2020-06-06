<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>
<div class="main" >
		<div class="custom-container">
			<div class="listingbody">
    <div class="container">

        <div id="wrapper">

            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="font-size:19px;color:black"> Classifieds Ads Reports  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <div class="row">
                    <div class="col-xs-12">

                        <?php if($reports->total() > 0): ?>
                            <table class="table table-bordered table-striped table-responsive">

                                <tr>
                                    <th><?php echo app('translator')->get('app.reason'); ?></th>
                                    <th><?php echo app('translator')->get('app.email'); ?></th>
                                    <th><?php echo app('translator')->get('app.message'); ?></th>
                                    <th><?php echo app('translator')->get('app.ad_info'); ?></th>
                                    <th><?php echo app('translator')->get('app.action'); ?></th>
                                </tr>

                                <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>

                                        <td><?php echo e($report->reason); ?></td>
                                        <td> <?php echo e($report->email); ?>  </td>
                                        <td>
                                            <?php echo e($report->message); ?>


                                            <hr />
                                            <p class="text-muted"> <i><?php echo app('translator')->get('app.date_time'); ?>: <?php echo e($report->posting_datetime()); ?></i></p>
                                        </td>
                                        <td>
                                            <?php if($report->ad): ?>
                                            <a href="<?php echo e(route('single_ad', [$report->ad->id, $report->ad->slug])); ?>" target="_blank"><?php echo app('translator')->get('app.view_ad'); ?></a>

                                            <i class="clearfix"></i>
                                            <a href="<?php echo e(route('reports_by_ads', $report->ad->slug)); ?>">
                                                <i class="fa fa-exclamation-triangle"></i> <?php echo app('translator')->get('app.reports'); ?> : <?php echo e($report->ad->reports->count()); ?>

                                            </a>
                                                <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="javascript:;" class="btn btn-danger deleteReport" data-id="<?php echo e($report->id); ?>"><i class="fa fa-trash"></i> </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </table>
                        <?php endif; ?>

                        <?php echo $reports->links(); ?>


                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

    <script>
        $(document).ready(function() {
            $('.deleteReport').on('click', function () {
                if (!confirm('<?php echo e(trans('app.are_you_sure')); ?>')) {
                    return '';
                }
                var selector = $(this);
                var id = selector.data('id');
                $.ajax({
                    url: '<?php echo e(route('delete_report')); ?>',
                    type: "POST",
                    data: {id: id, _token: '<?php echo e(csrf_token()); ?>'},
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

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/ad_reports.blade.php ENDPATH**/ ?>