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
            <div style="float:right"> <a href="<?php echo e(route('users')); ?>" id="changecolor"><i class="fa fa-users"></i> < back to <?php echo app('translator')->get('app.users'); ?></a>  </div>

                <div class="row">
                    <div class="col-xs-12">

                        <table class="table table-bordered table-striped">

                            <tr>
                                <th><?php echo app('translator')->get('app.name'); ?></th>
                                <td><?php echo e($user->name); ?></td>
                            </tr>
                            <tr>
                                <th>Interests</th>
                                <td><?php echo e($user->interests); ?></td>
                            </tr>

			    <tr>
                                <th>Account Type</th>
                                <td><?php if($user->payment == 'pending') { 
						echo "<span style='color:green;'>Standard Access</span>";
						} else { 
						echo "<span style='color:#c94574;'>Premium Access</span>";
					 }?></td>
                            </tr>
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
                                <th><?php echo app('translator')->get('app.created_at'); ?></th>
                                <td><?php echo e($user->signed_up_datetime()); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo app('translator')->get('app.status'); ?></th>
                                <td><?php echo e($user->status_context()); ?></td>
                            </tr>
                        </table>

                    </div>
                </div>

                    <?php if($ads->total() > 0): ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <h3><?php echo app('translator')->get('app.posted_ads'); ?></h3>

                                <table class="table table-bordered table-striped">

                                    <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td width="100">
                                                <img src="<?php echo e(media_url($ad->feature_img)); ?>" class="img-responsive" alt="">
                                            </td>
                                            <td>
                                                <h5><a href="<?php echo e(route('single_ad', [$ad->id, $ad->slug])); ?>" target="_blank"><?php echo e($ad->title); ?></a> </h5>
                                                <p class="text-muted">
                                                    <i class="fa fa-map-marker"></i> <?php echo e($ad->full_address()); ?> <br />  <i class="fa fa-clock-o"></i> <?php echo e($ad->posting_datetime()); ?>


                                                    <?php if($ad->reports->count() > 0): ?>
                                                    <br />
                                                    <a href="<?php echo e(route('reports_by_ads', $ad->slug)); ?>">
                                                    <i class="fa fa-exclamation-triangle"></i> <?php echo app('translator')->get('app.reports'); ?> : <?php echo e($ad->reports->count()); ?>

                                                    </a>
                                                    <?php endif; ?>
                                                </p>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>

                                <?php echo $ads->links(); ?>


                            </div>
                        </div>

                    <?php endif; ?>



            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/beta/resources/views/admin/user_info.blade.php ENDPATH**/ ?>