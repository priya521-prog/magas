<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>


<div class="main"><div class="custom-container"><div class="listingbody">

        <div id="wrapper">
            <?php echo $__env->make('admin.sidebar_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div id="page-wrapper">
                <?php if( ! empty($title)): ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Utilized Code </h1>
                        </div> <!-- /.col-lg-12 -->
                    </div> <!-- /.row -->
                <?php endif; ?>
                <?php echo $__env->make('admin.flash_msg', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="row">
                    <br><br>
                    <div class="col-sm-8 col-sm-offset-1 col-xs-12">

                    
                      <table  border="1" width="100%">
                          <tr>
                              <th>User</th>
                              
                          </tr>
                          <tr>
                              <?php foreach($query as $code)
                              {
                                  ?>
                              <td><?php echo $code->utilized_code; ?></td> 
                              
                          </tr>
                         <?php
                              }
                              
                              ?>
                      </table>

                    </div>

                </div>

                <hr />



                <div class="row">
                   
                </div>
            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div></div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/magas21/public_html/resources/views/admin/utilized.blade.php ENDPATH**/ ?>