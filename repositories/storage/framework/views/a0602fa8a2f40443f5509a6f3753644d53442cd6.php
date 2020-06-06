<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <div class="main"><div class="custom-container"><div class="listingbody">

        <div id="wrapper">

            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header" style="color:black;font-size:17px;padding:10px;"> ALL USERS LISTING </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>

                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <div class="row">
                    <div class="col-xs-12">

                        <table class="table" >
                            <tr>
                                <th><?php echo app('translator')->get('app.name'); ?></th>
                                <th><?php echo app('translator')->get('app.email'); ?></th>
                                 <th>Affiliate Code</th>
                                  <th>Utilized Code</th>
                                <th>Location</th>
                                <th>Phone No</th>
                                <th>Interests</th>
                                <th>Account Type</th>
                                <th><?php echo app('translator')->get('app.created_at'); ?></th>
                                 <th>Expiry</th>
                            </tr>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><a href="<?php echo e(route('user_info', $user->id)); ?>"><?php echo e($user->name); ?></a></td>
                                    <td><?php echo $user->email; ?></td>
                                    <td><?php echo $user->affiliate_code; ?></td>
                                       <td><?php echo $user->utilized_code; ?></td>
				    <td><?php echo $user->country->country_name; ?></td>
				     
				   
				    <td><?php echo $user->phone; ?>,<?php echo $user->mobile; ?></td>
				    <td><?php echo $user->interests; ?></td>
				    <td><?php if($user->payment == 'pending') { 
						echo "<span style='color:green;'>Standard Access</span>";
						} else { 
						echo "<span style='color:#c94574;'>Premium Access</span>";
					 }?>
				   </td>
                                    <td><?php echo $user->signed_up_datetime(); ?></td>
                                     <td><?php echo $user->expiry_date; ?></td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <?php echo $users->links(); ?>


                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->

</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/users.blade.php ENDPATH**/ ?>