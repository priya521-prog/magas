<?php $__env->startSection('title'); ?> <?php if( ! empty($title)): ?> <?php echo e($title); ?> | <?php endif; ?> ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

     <div class="main" ><div class="custom-container"><div class="listingbody">

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
<table border="1" width="100%" id="myTable">
                         <tr>
                         <td><b>Username</b></td><td><b>Code</b></td><td><b>Notes</b></td>
                     </tr>
                     
                 <?php
                 //dd($query);
                 foreach($user as $queries){
                     ?>
                     
                     <tr>
                         <td><?php echo $queries->name; ?></td>
                          <td id="alertData"><?php echo $queries->affiliate_code; ?></td>
                        
                            <td><?php echo $queries->notes; ?></td>
                    
                     
                     <?php
                 }
                 ?>
 </tr>
                     </table>
                    </div>
                </div><br><br>
                 <div class="row">
                      <div class="col-md-12">
                          <div class="col-md-5">
                 
                         <form action="<?php echo e(route('display_code')); ?>" class="form-horizontal" enctype="multipart/form-data" method="post"> <?php echo csrf_field(); ?>
                      
                        <!--<form action="<?php echo e(route('display_code')); ?>" id="businessadsPostForm" name="businessadsPostForm" class="form-horizontal"  method="post" >-->
                       Select Code: <select class="form-control select2" name="affilate_code" >
                                    <option value="">Select Affiliate Code</option>
                                    <?php $__currentLoopData = $codes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $queries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($queries->affiliate_code); ?>"><?php echo e($queries->affiliate_code); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <button type="submit" class="custom-button" id="submit">Generate</button>
                                </form>
                       </div><div class="col-md-7"></div>
                        </div></div><br><br>
                   
                 

            </div>   <!-- /#page-wrapper -->

        </div>   <!-- /#wrapper -->


    </div> <!-- /#container -->
</div> 
</div> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-js'); ?>
    <script src="<?php echo e(asset('assets/js/bootstrap-filestyle.min.js')); ?>"></script>
    <script>
        $(":file").filestyle({buttonName: "btn-primary", buttonBefore: true});
    </script>
    <script>
        
       
$(document).ready(function(){
    $("#myTable td").click(function() {     
 
        var column_num = parseInt( $(this).index() ) + 1;
        var row_num = parseInt( $(this).parent().index() )+1;    
 
        $("#result").html( "Row_num =" + row_num + "  ,  Rolumn_num ="+ column_num );   
    });
});
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/sermagas/public_html/resources/views/admin/code_report.blade.php ENDPATH**/ ?>