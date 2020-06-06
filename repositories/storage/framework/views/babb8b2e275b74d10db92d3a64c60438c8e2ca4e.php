<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
     <div class="main" ><div class="custom-container"><div class="listingbody">
        <div id="wrapper">
           

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

                        <?php if($user_messages->count()): ?>
                           <table class="table">
  <thead>
    <tr>
      <th scope="col"><?php echo app('translator')->get('app.sender'); ?></th>
      <th scope="col"><?php echo app('translator')->get('app.message'); ?></th>
      <th scope="col">Referal Page</th>
<th scope="col"><?php echo app('translator')->get('app.created_at'); ?></th>   

    </tr>
  </thead>
  <tbody>
                                <?php $__currentLoopData = $user_messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><i class="fa fa-user"></i> <?php echo e($message->name); ?> <br />
                                            <i class="fa fa-envelope-o"></i> <?php echo e($message->email); ?> <br />
                                            <i class="fa fa-phone"></i> <?php echo e($message->contact); ?> <br />
                                            <i class="fa fa-clock-o"></i> <?php echo e($message->created_at->diffForHumans()); ?></th>
      <td><?php echo e($message->message); ?> <br/>
<?php if($message->rating!='') { ?> 
Ratings : <?php echo e($message->rating); ?>

<?php } ?>   
</td>
      <td><?php echo e($message->fullpageurl); ?></td>
                                                                         <td><?php echo $message->created_at_datetime(); ?></td>
             <td><a href="<?php echo e(route('deletecontact',[$message->id])); ?>">Delete</a></td>
    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
  </tbody>
</table>
                            <?php echo $user_messages->links(); ?>

                        <?php else: ?>
                            <div class="alert alert-info">No data</div>
                        <?php endif; ?>

                    </div>
                </div>

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
 </div>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\magas_services\resources\views/admin/user_contactmessages.blade.php ENDPATH**/ ?>