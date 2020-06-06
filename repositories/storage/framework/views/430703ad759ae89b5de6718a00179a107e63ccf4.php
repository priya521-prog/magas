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
                        <div class="profile-avatar">
                            <img src="<?php echo e($user->get_gravatar(150)); ?>" class="img-thumbnail img-circle" />
                        </div>

                        <table class="table table-bordered table-striped">

                            <tr>
                                <th><?php echo app('translator')->get('app.name'); ?></th>
                                <td><?php echo e($user->name); ?></td>
                            </tr>
                            <!--<tr>-->
                            <!--    <th><?php echo app('translator')->get('app.user_name'); ?></th>-->
                            <!--    <td><?php echo e($user->user_name); ?></td>-->
                            <!--</tr>-->
                            <tr>
                                <th><?php echo app('translator')->get('app.email'); ?></th>
                                <td><?php echo e($user->email); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.gender'); ?></th>
                                <td><?php echo e(ucfirst($user->gender)); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.mobile'); ?></th>
                                <td><?php echo e($user->mobile); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.phone'); ?></th>
                                <td><?php echo e($user->phone); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.address'); ?></th>
                                <td><?php echo e($user->address); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.country'); ?></th>
                                <td>
                                    <?php if($user->country): ?>
                                        <?php echo e($user->country->country_name); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.website'); ?></th>
                                <td><?php echo e($user->website); ?></td>
                            </tr>
                            <tr>
                                <th>Affiliate Code</th>
                                <td><?php echo e($user->affiliate_code); ?></td>
                            </tr>
                            <!--<tr>-->
                            <!--    <th><?php echo app('translator')->get('app.created_at'); ?></th>-->
                            <!--    <td><?php echo e($user->signed_up_datetime()); ?></td>-->
                            <!--</tr>-->
                             <tr>
                                    <th>Created</th>
                                    <?php
                                    if($user->payment=='paid'){
                                        ?>
                                        <td><?php echo e($user->payment_paid); ?></td>
                                        <?php
                                    }else{
                                        ?>
                                         <td><?php echo e($user->signed_up_datetime()); ?></td>
                                        <?php
                                    }
                                    ?>
                                
                            </tr>
                             <tr>
                                <th>Expiry</th>
                                <td><?php echo e($user->expiry_date); ?></td>
                            </tr>
                             <tr>
                                <th><?php echo app('translator')->get('app.status'); ?></th>
                                <td><?php echo e($user->status_context()); ?></td>
                            </tr>
                            <!--<tr>-->
                            <!--    <th>Affiliate Code</th>-->
                            <!--    <td><?php echo e($user->affiliate_code); ?></td>-->
                            <!--</tr>-->
                            <tr>
                                <th>Account Type</th>
                                <td><?php echo e($user->account_type); ?></td>
                            </tr>
                        </table>

                        <a href="<?php echo e(route('profile_edit')); ?>"><i class="fa fa-pencil-square-o"></i> <?php echo app('translator')->get('app.edit'); ?> </a>

                    </div>
                </div>


            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/magas21/public_html/resources/views/admin/profile.blade.php ENDPATH**/ ?>