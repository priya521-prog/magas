<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

     <div class="main"><div class="custom-container"><div class="listingbody">

        <div id="wrapper">

            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="font-size:19px;color:black"> <?php echo e($title); ?>  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <div class="row">
                    <div class="col-xs-12">

                        <table class="table table-bordered table-striped">

                            
                            <tr>
                                <th><?php echo app('translator')->get('app.user_name'); ?></th>
                                <td><?php if($payment->user): ?><?php echo e($payment->user->name); ?> <?php endif; ?></td>
                            </tr>


                            <tr>
                                <th><?php echo app('translator')->get('app.amount'); ?></th>
                                <td><?php echo e($payment->amount); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.payment_method'); ?></th>
                                <td><?php echo e($payment->payment_method); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.status'); ?></th>
                                <td><?php echo e($payment->status); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.currency'); ?></th>
                                <td><?php echo e($payment->currency); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.charge_id_or_token'); ?></th>
                                <td><?php echo e($payment->status); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.payer_email'); ?></th>
                                <td><?php echo e($payment->payer_email); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.description'); ?></th>
                                <td><?php echo e($payment->description); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.transaction_id'); ?></th>
                                <td><?php echo e($payment->local_transaction_id); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.payment_completed_at'); ?></th>
                                <td><?php echo e($payment->payment_completed_at()); ?></td>
                            </tr>



                        </table>

                    </div>
                </div>


            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/admin/payment_info.blade.php ENDPATH**/ ?>