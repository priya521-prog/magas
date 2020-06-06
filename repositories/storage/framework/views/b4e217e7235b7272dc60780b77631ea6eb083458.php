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
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th><?php echo e(trans('app.name')); ?></th>
                                <th><?php echo e(trans('app.email')); ?></th>
                                <th><?php echo e(trans('app.last_login')); ?></th>
                                <th><?php echo e(trans('app.action')); ?></th>
                            </tr>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($u->name); ?></td>
                                <td><?php echo e($u->email); ?></td>
                                <td><?php echo e($u->last_login); ?></td>
                                <td>

                                    <?php if($u->id >2): ?>

                                    <a href="javascript:;" class="btn btn-danger blockAdministrator" data-id="<?php echo e($u->id); ?>" style="display: <?php echo e($u->active_status ==1? '': 'none'); ?>"><i class="fa fa-ban"></i> </a>
                                    <a href="javascript:;" class="btn btn-success unblockAdministrator" data-id="<?php echo e($u->id); ?>" style="display: <?php echo e($u->active_status ==1? 'none': ''); ?>"><i class="fa fa-ban"></i> </a>
                                    <?php endif; ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>


                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

    <script type="text/javascript">

        $(document).ready(function() {
            /**
             * Blck User
             */
            $('body').on('click','.blockAdministrator',function (e) {
                e.preventDefault();
                var this_btn = $(this);
                var user_id = this_btn.data('id');
                $.ajax({
                    url: '<?php echo e(route('administratorBlockUnblock')); ?>',
                    type: "POST",
                    data: { user_id : user_id, status : 'block', _token : '<?php echo e(csrf_token()); ?>' },
                    success: function (data) {
                        if (data.success == 1) {
                            this_btn.hide();
                            this_btn.closest('tr').find('.unblockAdministrator').show();
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });
            $('body').on('click','.unblockAdministrator',function (e) {
                e.preventDefault();
                var this_btn = $(this);
                var user_id = this_btn.data('id');
                $.ajax({
                    url: '<?php echo e(route('administratorBlockUnblock')); ?>',
                    type: "POST",
                    data: { user_id : user_id, status : 'unblock', _token : '<?php echo e(csrf_token()); ?>' },
                    success: function (data) {
                        if (data.success == 1) {
                            this_btn.hide();
                            this_btn.closest('tr').find('.blockAdministrator').show();
                            toastr.success(data.msg, '<?php echo app('translator')->get('app.success'); ?>', toastr_options);
                        }
                    }
                });
            });
        });

    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/administrators.blade.php ENDPATH**/ ?>