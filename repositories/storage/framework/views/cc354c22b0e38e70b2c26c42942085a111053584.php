<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

     <div class="main"><div class="custom-container"><div class="listingbody">
        <div id="wrapper">
            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="font-size:19px;color:black"> Payment Transactions  </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <div class="col-xs-12">

                        <?php if($payments->count()): ?>
                            <table class="table table-bordered table-striped" >
                                <tr>
                                    <th><?php echo app('translator')->get('app.user'); ?></th>
                                    <th><?php echo app('translator')->get('app.amount'); ?></th>
                                    <th><?php echo app('translator')->get('app.payment_method'); ?></th>
                                    <th><?php echo app('translator')->get('app.status'); ?></th>
                                    <th><?php echo app('translator')->get('app.created_at'); ?></th>
                                </tr>

                                <?php $__currentLoopData = $payments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                       
                                        <td>
                                            <?php if($payment->user): ?>
                                                <a href="<?php echo e(route('user_info', $payment->user->id)); ?>"  target="_blank"> <?php echo e($payment->user->name); ?></a>
                                            <?php else: ?>
                                                Deleted user
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo $payment->amount; ?></td>
                                        <td><?php echo $payment->payment_method; ?></td>
                                        <td><a href="<?php echo e(route('payment_info', $payment->local_transaction_id)); ?>"  target="_blank"><?php echo e($payment->status); ?></a></td>
                                        <td><?php echo $payment->created_at_datetime(); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                            <?php echo $payments->links(); ?>

                        <?php else: ?>
                            <div class="alert alert-info">
                                No payment data
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>   <!-- /#page-wrapper -->
        </div>   <!-- /#wrapper -->
    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/payments.blade.php ENDPATH**/ ?>