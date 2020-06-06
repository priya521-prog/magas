
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
                     <div class="col-lg-12">
                            <h1 class="page-header"> PDF Report  </h1>
                        </div>
                    <div class="col-xs-12">
                       <table border="1" width="100%">
                        <tr>
                          <th>Name</th><th>Email</th><th>Url</th>
                       </tr>
                        <?php
                  // dd($query);
                  foreach($query as $queries){
                   ?>
                      
                       
                       <tr>
                             <td><?php echo $queries->name; ?></td>
                        
                            <td><?php echo $queries->email; ?></td>
                             <td><?php echo $queries->full_url; ?></td>
                       </tr>
                        <?php
                  }
                   ?>
                   </table>

                    </div>
                </div>


            </div>   <!-- /#page-wrapper -->




        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/beta1magas/public_html/resources/views/admin/pdf_report.blade.php ENDPATH**/ ?>